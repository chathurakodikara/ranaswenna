<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gs extends Model
{
    use HasFactory;

    public function asc()
    {
        return $this->belongsTo('App\Models\Asc');
    }

    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    public function farmer(){
        return $this->hasMany('App\Models\Farmer');
    }


    protected $fillable = [
        'asc_id',
        'name',
        'name_si',
        'name_ta'
    ];
}
