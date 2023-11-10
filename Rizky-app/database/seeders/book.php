<?php

namespace Database\Seeders;

use App\Models\book_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\bookshelfs;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create('id_ID');

        for ($i=1; $i<=10; $i++) {

            $bookshelf = bookshelfs::inRandomOrder()->first();
            // $bookshelf = bookshelfs::all()->random()->id;
            // $bookshelf = DB::table('bookshelfs')->pluck('id');
            
            DB::table('books')->insert([
                'title' => $faker->randomElement([
                    'The Curious Incident of the Dog in the Night-Time',
                    'Pride and Prejudice and Zombies',
                    'A Thousand Splendid Suns'
                ]),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'publisher' => $faker->dateTime(),
                'city' => $faker->city(),
                'cover' => $faker->randomElement(['Art', 'Design', 'Novel', 'Creative']),
                'bookshelf_id' => $bookshelf->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
        }
    }
}
