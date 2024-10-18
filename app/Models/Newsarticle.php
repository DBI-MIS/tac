<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Illuminate\Support\Str;

class Newsarticle extends Model
{
    use HasFactory;

    protected $cast = [
        'published_at' => 'date',
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

    public function markdowntransform(){
        return  Str::limit(app(MarkdownRenderer::class)->toHtml($this->description), 80);
    }

    public function getDatePublished()
    {
        $publishedAt = $this->published_at->copy(); 
        $publishedAt->setTimezone('Asia/Manila');
        return $publishedAt->format(DateTime::ATOM); 
    }
    
    public function getDateModified()
    {
        $updatedAt = $this->updated_at->copy(); 
        $updatedAt->setTimezone('Asia/Manila');
        return $updatedAt->format(DateTime::ATOM); 
    }

   
}
