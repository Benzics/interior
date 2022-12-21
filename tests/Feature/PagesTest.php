<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    private $parameters = ['url' => 'about'];
    public function setUp(): void 
    {
        parent::setUp();
        $this->seed();
    }

    public function test_pages()
    {
        $response = $this->get(route('pages', $this->parameters));
        $response->assertOk();
    }
}
