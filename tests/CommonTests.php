<?php
namespace Tests;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommonTests extends TestCase {

    use RefreshDatabase;

    private $route = '';
    private $data = [];
    private $parameter = [];
    private $user;

    public function set_route(string $route)
    {
        $this->route = $route;
    }

    public function get_route(): string
    {
        return $this->route;
    }

    public function set_data(array $data)
    {
        $this->data = $data;
    }

    public function get_data(): array
    {
        return $this->data;
    }

    public function set_parameter(array $parameter)
    {
        $this->parameter = $parameter;
    }

    public function get_parameter(): array
    {
        return $this->parameter;
    }

    public function get_user()
    {
        return $this->user;
    }

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->user = User::find(1);
    }

    public function test_index()
    {
        $response = $this->actingAs($this->user)->get(route($this->route . '.index'));

        $response->assertOk();
    }

    public function test_create_page()
    {
        $response = $this->actingAs($this->user)->get(route($this->route . '.create'));

        $response->assertOk();
    }

    public function test_edit_page()
    {
        $response = $this->actingAs($this->user)->get(route($this->route . '.edit', $this->parameter));

        $response->assertOk();
    }

    public function test_delete()
    {
        $response = $this->actingAs($this->user)->delete(route($this->route . '.destroy', $this->parameter));

        $response->assertSessionHas('notify')->assertRedirect(route($this->route . '.index'));
    }

    public function test_edit()
    {
        $response = $this->actingAs($this->user)->put(route($this->route . '.update', $this->parameter), $this->data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route($this->route . '.index'));
    }

    public function test_create()
    {

        $response = $this->actingAs($this->user)->post(route($this->route . '.store'), $this->data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route($this->route . '.index'));
    }
}