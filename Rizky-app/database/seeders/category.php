<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) {

            DB::table('categories')->insert([
                'category' => $faker->randomElement(['Biography', 'Autobiography', 'Fiction', 'Thriller']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }

    }
}
