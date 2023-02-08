<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('books a product', function () {
    $data = ['email' => 'test@site.com', 'product_id' => '1', 'name' => 'test'];
    $response = $this->postJson(route('api.book'), $data);

    $response->assertJson(['success' => 'true']);
});
