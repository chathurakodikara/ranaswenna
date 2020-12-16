<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    protected $fillable = [
        'category_id',
        'name',
        'name_si',
        'name_ta',
        'img',
        'keywords'

    ];
}
