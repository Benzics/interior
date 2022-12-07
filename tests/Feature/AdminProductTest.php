<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class AdminProductTest extends TestCase
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
        $response = $this->actingAs($this->_user)->get(route('admin.products.index'));

        $response->assertOk();
    }

    public function test_create_page()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.products.create'));

        $response->assertOk()->assertValid();
    }

    public function test_view_page()
    {
        Product::factory()->create();
        $parameter = ['product' => '1'];

        $response = $this->actingAs($this->_user)->get(route('admin.products.view', $parameter));

        $response->assertOk();
    }

    public function test_product_create()
    {
        $data = [
        ];
    }

}
