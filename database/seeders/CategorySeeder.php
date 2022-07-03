<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([[
            'user_id' => 3,
            'category' => 'Western'
        ],
        [
            'user_id' => 3,
            'category' => 'Chinese'
        ],
        [
            'user_id' => 3,
            'category' => 'Japanese'
        ],
        [
            'user_id' => 3,
            'category' => 'Beverage'    
        ]    
        ]);
    }
}
