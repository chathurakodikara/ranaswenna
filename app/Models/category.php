<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function item(){
        return $this->hasMany('App\Models\Item');
    }
    
    protected $fillable = [
        'name',
        'name_si',
        'name_ta',
        'img'

    ];
}
