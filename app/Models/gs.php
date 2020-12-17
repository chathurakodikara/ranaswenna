<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gs extends Model
{
    use HasFactory;

    public function asc()
    {
        return $this->belongsTo('App\Models\Asc');
    }

    public function Product(){
        return $this->hasMany('App\Models\Product');
    }
}
