<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Product;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    private $parameters = ['url' => 'about'];

    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
    }

    private function _factory()
    {
        Category::factory()->create();
        return Product::factory()->create();
    }

    public function test_pages()
    {
        $response = $this->get(route('pages', $this->parameters));
        $response->assertOk();
    }

    public function test_single_category()
    {
        $this->_factory();

        $response = $this->get(route('categories.single', ['id' => '1']));
        $response->assertOk();
    }

}
