<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jhon = User::create([
            'name' => 'Jhon Due',
            'fk_department' => '2',
            'fk_designation' => '2',
            'phone_number' => '98541237',
        ]);

        $jhon = User::create([
            'name' => 'Tommy Mark',
            'fk_department' => '1',
            'fk_designation' => '1',
            'phone_number' => '962145387',
        ]);
    }
}
