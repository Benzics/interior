<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section_images')->insert([
            ['section_id' => '1', 'path' => 'images/gallery/pic1.jpg'],
            ['section_id' => '1', 'path' => 'images/gallery/pic2.jpg'],
            ['section_id' => '1', 'path' => 'images/gallery/pic3.jpg'],
        ]);
    }
}
