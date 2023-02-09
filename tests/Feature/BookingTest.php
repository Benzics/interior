<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);
$data = ['email' => 'test@site.com', 'product_id' => '1', 'name' => 'test'];

it('books a product', function () use ($data) {
    $response = $this->postJson(route('api.book'), $data);

    $response->assertJson(['success' => 'true']);
});
