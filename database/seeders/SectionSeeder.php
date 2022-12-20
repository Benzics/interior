<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            ['id' => '1', 'name' => 'about', 'title' => 'WELCOME', 'subtitle' => 'WE ARE CREATIVE BUILDING - DESIGN COMPANY',
            'content' => '<p>DUMMY TEXT IS ALSO USED TO DEMONSTRATE THE APPEARANCE OF DIFFERENT TYPEFACES AND LAYOUTS, AND IN GENERAL</p>
            <p class="text-lowercase">
            typefaces and layouts, and in appearance of different general the content of dummy text is nonsensical.typefaces and layouts, different general the content of dummy text is nonsensical.</p>',
            'button_text' => 'READ MORE', 'url' => 'pages/about']
        ]);
    }
}
