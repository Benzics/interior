<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PasswordTest extends TestCase
{
    use RefreshDatabase;

    private $_user;

    private $_parameter = ['apartment_category' => '1'];

    private $_data = ['old_password' => 'admin', 'password' => 'admin', 'password_confirmation' => 'admin'];

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->_user = User::find(1);
    }

    public function test_index()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.password'));

        $response->assertOk();
    }

    public function test_password_change()
    {
        $response = $this->actingAs($this->_user)->post(route('admin.password'), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.password'));
    }
}
