<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userstestseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'), // Make sure to hash the password
            'phonenumber' => '1234567890',
            'address' => '123 Main Street',
            'role' => 'admin',
            'status' => 'active',
           ],

           [
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => bcrypt('1234'), // Make sure to hash the password
            'phonenumber' => '1234567890',
            'address' => '123 Main Street',
            'role' => 'client',
            'status' => 'active',
           ],

           [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('1234'), // Make sure to hash the password
            'phonenumber' => '1234567890',
            'address' => '123 Main Street',
            'role' => 'user',
            'status' => 'active',
           ]
        ]);
    }
}
