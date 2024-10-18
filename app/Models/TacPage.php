<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacPage extends Model
{
    use HasFactory;


    protected $fillable =[
        'title',
        'img_page',
        'section',
        'description1',
        'description2',

    ];
}
