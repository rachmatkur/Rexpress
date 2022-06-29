<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([[
            'name' => 'Burger',
            'price' => 50000,
            'description' => 'Delicioso',
            'stock' => 5,
            'category_id' => 1
        ]]
        );
    }
}
