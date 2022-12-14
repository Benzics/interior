<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            ['name' => 'currency_symbol', 'value' => 'N'],
            ['name' => 'currency', 'value' => 'Naira'],
            ['name' => 'admin-mail', 'value' => 'test@mail.com'],
            ['name' => 'address', 'value' => 'Test'],
            ['name' => 'phone', 'value' => '12345']
        ]);
    }
}
