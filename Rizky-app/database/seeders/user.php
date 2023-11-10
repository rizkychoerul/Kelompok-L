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
        
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10 ; $i++) { 
            
            DB::table('users')->insert([
                'username' => $faker->firstName(),
                'name' => $faker->name(),
                'email' => $faker->email(),
                'email_verified_at' => now(),
                'password' => $faker->uuid(),
                'remember_token' => $faker->numerify(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
        }

    }
}
