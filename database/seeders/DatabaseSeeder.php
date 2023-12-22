<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'annisafatya11@gmail.com',
                'password' => \Hash::make('fatyaica123'),
                'isAdmin' => true
            ],
            [
                'name' => 'User',
                'email' => 'annisafatya11@gmail.com',
                'password' => \Hash::make('fatyaica123'),
                'isAdmin' => false
            ]
        ]);
    }
}
