<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganicCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text_color',
        'bg_color',
    ];
    
    public function organicproducts()
    {
        return $this->belongsToMany(OrganicProduct::class, 'organic_products_pivot');
    }

    
}
