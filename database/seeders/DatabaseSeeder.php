<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Jenssegers\Mongodb\Auth\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::create([
        //     'name' => 'Dea',
        //     'Email' => 'Dea@mail.com',
        //     'password' => bcrypt('admin')
        // // ]);

        DB::collection('users')->delete();
        DB::collection('users')->insert([
            'name' => 'Dea Derika', 
            'email' => 'Dea@gmail.com',
            'password' => bcrypt('admin'),
            'seed' => true]);
    }
}//http://127.0.0.1:8000