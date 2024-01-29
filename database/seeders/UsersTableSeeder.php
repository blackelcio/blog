<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Heitor Nascimento Rezende',
        //     'email' => 'rotieh@gmail.com',
        //     'password' => bcrypt('Roblox2020')
        // ]);

            \App\Models\User::factory(10)->create();

    }
}
