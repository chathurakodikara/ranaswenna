<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asc extends Model
{
    use HasFactory;

    public function gss()
    {
        return $this->hasMany('App\Models\Gs');
    }

    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    protected $fillable = [
        'district',
        'name',
        'name_si',
        'name_ta'
    ];
}
