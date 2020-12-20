<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asc extends Model
{
    use HasFactory;

    public function gs()
    {
        return $this->hasMany('App\Models\Gs');
    }

    public function Product(){
        return $this->hasMany('App\Models\Product');
    }
}
