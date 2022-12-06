<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class AdminCategoriesTest extends TestCase
{
    use RefreshDatabase;

    private $_user;

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->_user = User::find(1);
    }

    public function test_index()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.categories.index'));

        $response->assertOk();
    }

    public function test_create_page()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.categories.create'));

        $response->assertOk()->assertValid();
    }

    public function test_create_category()
    {
        $data = ['name' => 'Test category'];

        $response = $this->actingAs($this->_user)->post(route('admin.categories.store'), $data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.categories.index'));
    }

    public function test_edit_page()
    {
        Category::factory()->create();
        $parameter = ['category' => '1'];
        
        $response = $this->actingAs($this->_user)->get(route('admin.categories.edit', $parameter));

        $response->assertOk()->assertValid();
    }

    public function test_edit_category()
    {
        Category::factory()->create();

        $data = ['name' => 'Test category'];
        $parameter = ['category' => '1'];

        $response = $this->actingAs($this->_user)->put(route('admin.categories.update', $parameter), $data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.categories.index'));
    }

    public function test_delete_category()
    {
        Category::factory()->create();

        $parameter = ['category' => '1'];

        $response = $this->actingAs($this->_user)->delete(route('admin.categories.destroy', $parameter));

        $response->assertSessionHas('notify')->assertRedirect(route('admin.categories.index'));
    }


}
