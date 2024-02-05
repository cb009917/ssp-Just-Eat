<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price', 
        'description',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
