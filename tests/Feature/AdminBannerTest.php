<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminBannerTest extends TestCase
{
    use RefreshDatabase;

    private $_user;

    private $_parameter = ['banner' => '1'];

    private $_data = [
        'name' => 'Test product',
        'description' => 'Test description',
        'title' => 'Test',
        'url' => 'test',
    ];

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
        $this->_user = User::find(1);
    }

    public function test_index()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.banners.index'));
        $response->assertOk();
    }

    public function test_create_page()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.banners.create'));

        $response->assertOk();
    }

    public function test_create_banner()
    {
        Storage::fake('products');

        
        $this->_data['image'] = [UploadedFile::fake()->image('banner.jpg')];

        $response = $this->actingAs($this->_user)->post(route('admin.banners.store'), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.banners.index'));
    }

    public function test_edit_banner_page()
    {
        $response = $this->actingAs($this->_user)->get(route('admin.banners.edit'));

        $response->assertOk();
    }

    public function test_banner_edit()
    {
        $response = $this->actingAs($this->_user)->put(route('admin.banners.update', $this->_parameter), $this->_data);

        $response->assertValid()->assertSessionHas('notify')->assertRedirect(route('admin.banners.index'));
    }

    public function test_banner_delete()
    {

        $response = $this->actingAs($this->_user)->delete(route('admin.banners.destroy', $this->_parameter));

        $response->assertSessionHas('notify')->assertRedirect(route('admin.banners.index'));
    }
}
