<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $data = [[
    //         'name' => 'Agung Malik Al Qindy',
    //         'birthplace' => 'Bondowoso',
    //         'birthday' => '24-07-2003',
    //         'address' => 'Wonosari',
    //         'education' => 'Politeknik Negeri Malang',
    //         'location' => 'Malang, Jawa Timur',
    //         'skills' => 'Laravel, Flask, Javascript, React js, Next js',
    //         'slug' => 'agung'
    //     ],
    //     [
    //         'name' => 'Bryan Tosin Saputro',
    //         'birthplace' => 'Malang',
    //         'birthday' => '03-10-2002',
    //         'address' => 'Jl.Martorejo',
    //         'education' => 'Politeknik Negeri Malang',
    //         'location' => 'Malang, Jawa Timur',
    //         'skills' => 'UI Design Coding Javascript PHP Node.js',
    //         'slug' => 'bryan'
    //     ]
    // ];
    //     DB::table('students')->insert($data);

        Student::factory()->count(5)->create();
    }
}
