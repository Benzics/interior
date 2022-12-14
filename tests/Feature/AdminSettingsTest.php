<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Setting;
use App\Models\User;

class AdminSettingsTest extends TestCase
{
    use RefreshDatabase;

    private $_user;

    private $_data = ['name' => 'Test setting', 'value' => 'Test'];

    private function _factory()
    {
        return Setting::factory()->create();
    }

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->_user = User::find(1);
    }

    public function test_settings_page()
    {
        $this->_factory();
        $response = $this->actingAs($this->_user)->get(route('admin.settings'));
        $response->assertOk()->assertValid();
    }

    public function test_settings_edit()
    {
        $this->_factory();

        $response = $this->actingAs($this->_user)->post(route('admin.settings'), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.settings'));
    }

}
