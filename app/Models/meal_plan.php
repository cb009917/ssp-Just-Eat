<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal_plan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'Address',
        'email',
        'city',
        'state',
        'zip',
        'First_delivery_on',
        'time'

        
    ];
}
