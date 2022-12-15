<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            ['name' => 'About', 'content' => 'about us'],
            ['name' => 'Terms', 'content' => 'Terms and conditions'],
            ['name' => 'Privacy Policy', 'content' => 'Privacy Policy'],
        ]);
    }
}
