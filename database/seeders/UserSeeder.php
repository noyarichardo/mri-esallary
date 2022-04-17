<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name'              =>  'noyarichardo',
            'level'             =>  'admin',
            'email'             =>  'noyarichardo@gmail.com',
            'password'          =>  bcrypt('password'),
            'remember_token'    =>  Str::random(60),

        ]);
        User::create([
            'name'              =>  'Noya',
            'level'             =>  'admin',
            'email'             =>  'admin@gmail.com',
            'password'          =>  bcrypt('password'),
            'remember_token'    =>  Str::random(60),

        ]);
        User::create([
            'name'              =>  'User Noya',
            'level'             =>  'user',
            'email'             =>  'user@gmail.com',
            'password'          =>  bcrypt('password'),
            'remember_token'    =>  Str::random(60),

        ]);

    }
}
