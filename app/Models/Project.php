<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory,SoftDeletes;

    protected $cast = [
        'featured' => 'boolean',
        'status' => 'boolean',
    ];

    protected $fillable =[
        'title',
        'description',
        'project_img',
        'brand',
        'category',
        'featured',
        'status',
        'slug',
    ];

    public function getExcerpt() 
    {
        return Str::limit(strip_tags($this->description), 100);
    }
}
