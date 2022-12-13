<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ApartmentCategory as Category;
use App\Models\Apartment as Product;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminApartmentsTest extends TestCase
{
    use RefreshDatabase;

    private $_user;

    private $_parameter = ['apartment' => '1'];

    private $_data = [
        'name' => 'Test product',
        'description' => 'Test description',
        'category_id' => '1',
        'price' => '10',
    ];

    private function _factory()
    {
        Category::factory()->create();
        return Product::factory()->create();
    }

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->_user = User::find(1);
    }

    public function test_index()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.apartments.index'));

        $response->assertOk();
    }

    public function test_create_page()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.apartments.create'));

        $response->assertOk()->assertValid();
    }

    public function test_view_page()
    {
        $this->_factory();
        

        $response = $this->actingAs($this->_user)->get(route('admin.apartments.show', $this->_parameter));

        $response->assertOk();
    }

    public function test_product_create()
    {
        Storage::fake('products');

        $this->_data['images'] = [UploadedFile::fake()->image('product.jpg')];

        $response = $this->actingAs($this->_user)->post(route('admin.apartments.store'), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.apartments.index'));
    }

    public function test_product_edit_page()
    {
        $this->_factory();
        $response = $this->actingAs($this->_user)->get(route('admin.apartments.edit', $this->_parameter));

        $response->assertOk()->assertValid();
    }

    public function test_product_edit()
    {
        $this->_factory();

        $response = $this->actingAs($this->_user)->put(route('admin.apartments.update', $this->_parameter), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.apartments.index'));
    }

    public function test_product_delete()
    {
        $this->_factory();

        $response = $this->actingAs($this->_user)->delete(route('admin.apartments.destroy', $this->_parameter));

        $response->assertSessionHas('notify')->assertRedirect(route('admin.apartments.index'));
    }
}
