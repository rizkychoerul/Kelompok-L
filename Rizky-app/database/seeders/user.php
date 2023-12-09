<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
            DB::table('users')->insert([
                [
                    'username' => 'Rizky',
                    'name' => 'Rizky Choerul',
                    'email' => 'rcf2512@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('rizky2512'),
                    'remember_token' => rand(100,500),
                    'created_at' => now(),
                    'updated_at' => now(),
                ], 
                [
                    'username' => 'Admin',
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('admin1234'),
                    'remember_token' => rand(100,500),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
    }
}
