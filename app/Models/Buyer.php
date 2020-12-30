<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'business',
        'registration_no',
        'type',
        'telephone',
        'description',
        'address',
        'title',
        'contacted_person',
        'mobile_1',
        'mobile_2',
        'fax',
        'email'
    ];

    public function getContactedPersonWithTitleAttribute()
    {
        return $this->title.' '.$this->contacted_person;
    }
}
