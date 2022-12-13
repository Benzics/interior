<?php

namespace Tests\Feature;

use App\Models\ApartmentCategory as Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class AdminApartmentCategoriesTest extends TestCase
{
    use RefreshDatabase;

    private $_user;

    private $_parameter = ['apartment_category' => '1'];

    private $_data = ['name' => 'Test category'];

    private function _factory()
    {
        return Category::factory()->create();
    }

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->_user = User::find(1);
    }

    public function test_index()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.apartment-categories.index'));

        $response->assertOk();
    }

    public function test_create_page()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.apartment-categories.create'));

        $response->assertOk()->assertValid();
    }

    public function test_create_category()
    {
        $response = $this->actingAs($this->_user)->post(route('admin.apartment-categories.store'), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.apartment-categories.index'));
    }

    public function test_edit_page()
    {
        $this->_factory();
        
        $response = $this->actingAs($this->_user)->get(route('admin.apartment-categories.edit', $this->_parameter));

        $response->assertOk()->assertValid();
    }

    public function test_edit_category()
    {
        $this->_factory();

        $response = $this->actingAs($this->_user)->put(route('admin.apartment-categories.update', $this->_parameter), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.apartment-categories.index'));
    }

    public function test_delete_category()
    {
        $this->_factory();

        $response = $this->actingAs($this->_user)->delete(route('admin.apartment-categories.destroy', $this->_parameter));

        $response->assertSessionHas('notify')->assertRedirect(route('admin.apartment-categories.index'));
    }


}
