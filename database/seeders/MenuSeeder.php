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
            'stock' => 2,
            'category_id' => 1,
            'user_id' => 3,
            'image' => 'hamburger.jpg'
        ],
        [
            'name' => 'Carbonara Pasta',
            'price' => 65000,
            'description' => 'Chicken flavor pasta with cheese',
            'stock' => 40,
            'category_id' => 1,
            'user_id' => 3,
            'image' => 'carbonara.jpg'
        ],
        [
            'name' => 'Steak',
            'price' => 90000,
            'description' => 'Juicy and tender Beef',
            'stock' => 30,
            'category_id' => 1,
            'user_id' => 3,
            'image' => 'steak.jpg'
        ],
        [
            'name' => 'Mapo Tofu',
            'price' => 45000,
            'description' => 'Hot spicy tofy',
            'stock' => 40,
            'category_id' => 2,
            'user_id' => 3,
            'image' => 'mapo tofu.jpg'
        ],
        [
            'name' => 'Congee',
            'price' => 35000,
            'description' => 'Delicioso',
            'stock' => 50,
            'category_id' => 2,
            'user_id' => 3,
            'image' => 'congee.jpg'
        ],
        [
            'name' => 'Dim Sum',
            'price' => 30000,
            'description' => 'Delicioso',
            'stock' => 70,
            'category_id' => 2,
            'user_id' => 3,
            'image' => 'dim sum.jpg'
        ],
        [
            'name' => 'Oyakodon',
            'price' => 35000,
            'description' => 'Rice bowl with katsu on top',
            'stock' => 40,
            'category_id' => 3,
            'user_id' => 3,
            'image' => 'oyakodon.jpg'
        ],
        [
            'name' => 'Curry',
            'price' => 35000,
            'description' => 'Traditional Japanese curry',
            'stock' => 40,
            'category_id' => 3,
            'user_id' => 3,
            'image' => 'curry.jpg'
        ],
        [
            'name' => 'Ramen',
            'price' => 30000,
            'description' => 'Original japanese ramen',
            'stock' => 40,
            'category_id' => 3,
            'user_id' => 3,
            'image' => 'ramen.jpg'
        ],
        [
            'name' => 'Ice Tea',
            'price' => 12000,
            'description' => 'Fresh ice tea',
            'stock' => 70,
            'category_id' => 4,
            'user_id' => 3,
            'image' => 'ice tea.jpg'
        ],
        [
            'name' => 'Lemon tea',
            'price' => 15000,
            'description' => 'Uses fresh lemon',
            'stock' => 70,
            'category_id' => 4,
            'user_id' => 3,
            'image' => 'lemon tea.jpg'
        ],
        [
            'name' => 'Milk Tea',
            'price' => 22000,
            'description' => 'Using top grade milk',
            'stock' => 70,
            'category_id' => 4,
            'user_id' => 3,
            'image' => 'milk tea.jpg'
        ],
        [
            'name' => 'Fruit Juice',
            'price' => 20000,
            'description' => 'Choose any fruit juice you like',
            'stock' => 70,
            'category_id' => 4,
            'user_id' => 3,
            'image' => 'fruit juice.jpg'
        ],
        [
            'name' => 'Smoothie',
            'price' => 25000,
            'description' => 'Choose any smoothie you like',
            'stock' => 70,
            'category_id' => 4,
            'user_id' => 3,
            'image' => 'smoothie.jpg'
        ],
        [
            'name' => 'Latte',
            'price' => 23000,
            'description' => 'Delicious',
            'stock' => 70,
            'category_id' => 4,
            'user_id' => 3,
            'image' => 'latte.jpg'
        ],
        [
            'name' => 'Latto',
            'price' => 23000,
            'description' => 'Delicious',
            'stock' => 70,
            'category_id' => 4,
            'user_id' => 4,
            'image' => 'latto.jpg'
        ],
        ]
        );
    }
}
