<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmer extends Model
{
    use HasFactory;

    public function Product(){
        return $this->hasMany('App\Models\Product');
    }

    protected $fillable = [
        'nic',
        'birthday',
        'name',
        'business_name',
        'about',
        'asc_id',
        'gs_id',
        'telephone_1',
        'telephone_2',
        'email',
        'address'

    ];
}
