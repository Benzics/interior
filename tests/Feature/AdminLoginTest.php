<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class AdminLoginTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->user = User::find(1);
    }

    /**
     * Our login page
     */
    public function test_login_page()
    {
        $response = $this->get(route('admin.login'));

        $response->assertOk();
    }

    public function test_login_function()
    {
        $data = [
            'email' => 'admin@site.com',
            'password' => 'admin',
        ];

        $response = $this->post(route('admin.login'), $data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.dashboard'));
    }

    public function test_logout()
    {
        $response = $this->get(route('admin.logout'));

        $response->assertValid()->assertRedirect(route('admin.login'));
    }

    public function test_dashboard()
    {
        $response = $this->actingAs($this->user)->get(route('admin.dashboard'));

        $response->assertOk();
    }

}

