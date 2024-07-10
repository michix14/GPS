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
        User::create([
            'name'=>'Michel Cárdenas',
            'email'=>'michixcard@gmail.com',
            'password'=>bcrypt('123456789')
        ]);

        User::create([
            'name'=>'David Soliz',
            'email'=>'david@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::create([
            'name'=>'Mario Herbas',
            'email'=>'mario@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::create([
            'name'=>'Jose Carlos Alarcon',
            'email'=>'joseca@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::create([
            'name'=>'Rene Chungara',
            'email'=>'rene@gmail.com',
            'password'=>bcrypt('123456789')
        ]);

    }
}