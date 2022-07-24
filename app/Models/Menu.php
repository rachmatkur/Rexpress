<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\GlobalState\Restorer;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'image',
        'category_id',
        'user_id'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
