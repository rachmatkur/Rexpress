<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }
}
