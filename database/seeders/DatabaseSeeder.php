<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call ([ ContactSeeder::class,]);
         \App\Models\User::factory(2)->create();
        
         DB::table('users')->insert([
            'name' => "Eli Federico",
            'email' => "elif@test",
            'password' => Hash::make('password'),
        ]);
    }
}
