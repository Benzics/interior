<?php

namespace Tests\Feature;

use Tests\CommonTests;

class AdminSectionTest extends CommonTests
{
    public function setUp(): void 
    {
        parent::setUp();
        $this->set_route('admin.sections');
        $this->set_data(['name' => 'Test', 'content' => 'Test',]);
        $this->set_parameter(['section' => '1']);
    }
}
