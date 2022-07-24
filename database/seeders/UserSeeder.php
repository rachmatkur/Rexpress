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
        User::insert([[
            'role' => 1,
            'email' => 'ethan123@gmail.com',
            'name' => 'ethan',
            'password' => bcrypt('ethan123'),
            'address' => 'jakarta',
            'profilePicture' => '',
            'phoneNumber' => '081212345678',
            'description' => ''
        ],
        [
            'role' => 2,
            'email' => 'rachmat123@gmail.com',
            'name' => 'rachmat',
            'password'  => bcrypt('rachmat123'),
            'address' => 'madiun',
            'profilePicture' => '',
            'phoneNumber' => '081212345677',
            'description' => ''
        ],
        [
            'role' => 3,
            'email' => 'steven123@gmail.com',
            'name' => 'steven',
            'password' => bcrypt('steven123'),
            'address' => 'jakarta',
            'profilePicture' => '',
            'phoneNumber' => '081212345513',
            'description' => ''
        ],
        [
            'role' => 3,
            'email' => 'stevon123@gmail.com',
            'name' => 'stevon',
            'password' => bcrypt('stevon123'),
            'address' => 'jakarta',
            'profilePicture' => '',
            'phoneNumber' => '081212345513',
            'description' => ''
        ],
    ]);
    }
}
