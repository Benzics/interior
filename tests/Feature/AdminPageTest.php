<?php

namespace Tests\Feature;

use Tests\CommonTests;

class AdminPageTest extends CommonTests
{
    public function setUp(): void 
    {
        parent::setUp();
        $this->set_route('admin.pages');
        $this->set_data(['name' => 'Test', 'content' => 'Test', 'url' => 'test']);
        $this->set_parameter(['page' => '1']);
    }


}
