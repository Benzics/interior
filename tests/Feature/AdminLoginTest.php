<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminLoginTest extends TestCase
{
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

        $response->assertValid()->assertSessionHas('success')->assertRedirect(route('admin.dashboard'));
    }
}

