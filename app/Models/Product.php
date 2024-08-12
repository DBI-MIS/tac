<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'product_img',
        'user_id',
        'status',
        'featured',
        'description',
        'features',
        'technical_specs',
        'categories',
        'slug',
        'brand_id',
        
    ];

    protected $casts = [
        'status' => 'boolean',
        'featured' => 'boolean',
        'categories' => 'array',
    ];

    public function product_brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function product_response()
    {
        return $this->belongsTo(Response::class);
    }

    public function productcategories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function scopePublished($query)
    {
        return $query->where('featured', true);
    }

    public function scopeWithCategory($query, string $category)
    {
        $query->whereHas('productcategories', function($query) use ($category)
        {
            $query->where('slug', $category);
        });
    }

    public function getExcerpt() 
    {
        return Str::limit(strip_tags($this->description), 50);
    }
}
