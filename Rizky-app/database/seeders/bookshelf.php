<?php

namespace Database\Seeders;

use App\Models\books;
use App\Models\bookshelfs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class bookshelf extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
            
            DB::table('bookshelfs')->insert([
                'code' => $faker->randomDigitNotNull(),
                'name' => $faker->name(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
