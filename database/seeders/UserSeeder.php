<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'Agung Malik Al Qindy',
            'email' => 'agungalqindy@gmail.com',
            'password' => Hash::make('password')
        ],
        [
            'name' => 'Bryan Tosin Saputro',
            'email' => 'bryantosin@gmail.com',
            'password' => Hash::make('password')
        ]];

        DB::table('users')->insert($data);
    }
}
