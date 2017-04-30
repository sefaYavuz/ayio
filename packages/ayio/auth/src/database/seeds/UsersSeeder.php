<?php

namespace Ayio\Auth\Database\Seeds;

use Ayio\Auth\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sefa Yavuz',
            'email' => 'seff61@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
