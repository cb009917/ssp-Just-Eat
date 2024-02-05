<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'slug',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
