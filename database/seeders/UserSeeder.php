<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Jesús Robles',
            'email' => 'jrobles@naturcode.eu',
            'password' => bcrypt('secret')
        ]);
    }
}
