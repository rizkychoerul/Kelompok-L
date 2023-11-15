<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class lecturer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10 ; $i++) { 
            
            DB::table('lecturer')->insert([
                // 'nidn' => $faker->randomNumber(),
                'name' => $faker->name(),
                'received_at' => now(),
            ]);
        
        }
    }
}
