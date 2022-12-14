<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'name' => 'banner1',
                'title' => 'Modern House',
                'description' => 'Our company takes orders to external architectural offices.',
                'url' => 'products',
                'image' => 'images/slide/slide1.jpg',
            ],
            [
                'name' => 'banner2',
                'title' => 'Your dream we design',
                'description' => 'Our company takes orders to external architectural offices.',
                'url' => 'products',
                'image' => 'images/slide/slide2.jpg',
            ],
            [
                'name' => 'banner3',
                'title' => 'Your dream we design',
                'description' => 'Our company takes orders to external architectural offices.',
                'url' => 'products',
                'image' => 'images/slide/slide3.jpg',
            ],
        ]);
    }
}
