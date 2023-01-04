<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    public function test_book_product()
    {
        $data = ['email' => 'test@site.com', 'product_id' => '1', 'name' => 'test'];
        $response = $this->post(route('api.book'), $data);

        $response->assertJson(['success' => true]);
    }
}
