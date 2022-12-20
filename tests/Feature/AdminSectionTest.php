<?php

namespace Tests\Feature;

use Tests\CommonTests;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminSectionTest extends CommonTests
{
    public function setUp(): void 
    {
        parent::setUp();
        Storage::fake('products');
        $this->set_route('admin.sections');
        $this->set_data(['name' => 'Test', 'title' => 'Test', 'subtitle' => 'Test', 'images' => [UploadedFile::fake()->image('product.jpg')], 'content' => 'Test', 'url' => 'Test', 'button_text' => 'Test']);
        $this->set_parameter(['section' => '1']);
    }
}
