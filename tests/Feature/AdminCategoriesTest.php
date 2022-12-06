<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class AdminCategoriesTest extends TestCase
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
        $response = $this->actingAs($this->_user)->get(route('admin.categories.index'));

        $response->assertOk();
    }
}
