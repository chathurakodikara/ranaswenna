<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function item() {
        return $this->belongsTo('App\Models\item');
    }

    public function farmer() {
        return $this->belongsTo('App\Models\farmer');
    }

    public function asc() {
        return $this->belongsTo('App\Models\asc');
    }

    public function gs() {
        return $this->belongsTo('App\Models\gs');
    }
    // protected $table = 'farmers';
}
