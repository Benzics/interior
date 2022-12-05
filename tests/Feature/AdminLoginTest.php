<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class AdminLoginTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
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
}

