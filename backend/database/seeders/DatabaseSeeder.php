<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
             'username' => 'Administrator',
             'email' => 'test@example.com',
             'phone' => '79999999999',
             'password' => Hash::make('babka1243'),
         ]);
    }
}
