<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::insert(
            [
                'user_id' => 3,
                'menu_id' => 1
            ],
            [
                'user_id' => 3,
                'menu_id' => 2,
            ],
            [
                'user_id' => 3,
                'menu_id' => 2,
            ],
        );
    }
}
