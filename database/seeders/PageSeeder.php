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
            ['name' => 'About', 'content' => 'about us', 'url' => 'about'],
            ['name' => 'Terms', 'content' => 'Terms and conditions', 'url' => 'terms'],
            ['name' => 'Privacy Policy', 'content' => 'Privacy Policy', 'url' => 'privacy'],
        ]);
    }
}
