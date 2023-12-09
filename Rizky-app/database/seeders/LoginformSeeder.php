<?php

namespace Database\Seeders;

use App\Models\loginform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('loginforms')->insert(
            [
                'Email' => 'rcf2512@gmail.com',
                'Password' => Hash::make('rizky2512')
            ],
            [
                'Email' => 'aldy@gmail.com',
                'Password' => Hash::make('aldy1234')
            ]);
    }
}
