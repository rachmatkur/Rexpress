<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\GlobalState\Restorer;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function categoory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function restorant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}
