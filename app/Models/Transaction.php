<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'menu_id',
        'qty',
        'total',
        'restaurant_id'
    ];

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
