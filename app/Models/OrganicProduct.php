<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\LaravelMarkdown\MarkdownRenderer;

class OrganicProduct extends Model
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
        'benefits',
        'storage',
        'packaging',
        'usage',
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

    public function organicproductorganiccategories()
    {
        return $this->belongsToMany(OrganicCategory::class, 'organic_products_pivot');
    }

    public function scopePublished($query)
    {
        return $query->where('featured', true);
    }

    public function scopeWithCategory($query, string $organiccategory)
    {
        $query->whereHas('organicproductorganiccategories', function($query) use ($organiccategory)
        {
            $query->where('slug', $organiccategory);
        });
    }

    public function markdowntransform()
    {
        $description = $this->description ?? '';

        if (!is_string($description) || trim($description) === '') {
            return '';
        }

        return Str::limit(app(MarkdownRenderer::class)->toHtml($description), 80);
    }


    public function getExcerpt() 
    {
        return Str::limit(strip_tags($this->description), 50);
    }

    // protected $table = 'organic_category_organic_product';
}
