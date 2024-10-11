<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsarticle extends Model
{
    use HasFactory;

    protected $cast = [
        'published_at'  => 'date',
        'is_featured' => 'boolean',
    ];

    protected $fillable =[
        'title',
        'category',
        'description',
        'img',
        'slug',
        'is_featured',
        'published_at',



    ];
}
