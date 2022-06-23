<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Susan Lady',
            'email' => 'susan@gmail.com',
            'password' => bcrypt('susan'),
            'profile' => 'purple.jpg'
        ]);

        User::create([
            'name' => 'Novia Sari',
            'email' => 'novia@gmail.com',
            'password' => bcrypt('novia'),
            'profile' => 'purple.jpg'
        ]);

        User::create([
            'name' => 'Geronimo',
            'email' => 'nimo@gmail.com',
            'password' => bcrypt('nimo'),
            'profile' => 'purple.jpg'
        ]);

        User::create([
            'name' => 'Edwin Hans',
            'email' => 'edwin@gmail.com',
            'password' => bcrypt('edwin'),
            'profile' => 'purple.jpg'
        ]);
    }
}
