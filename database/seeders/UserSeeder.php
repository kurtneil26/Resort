<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('123456789'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'role' => 'student',
                'status' => 'active',
                'password' => bcrypt('123456789'),
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
