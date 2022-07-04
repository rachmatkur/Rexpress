<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
