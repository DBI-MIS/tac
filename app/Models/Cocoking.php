<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Illuminate\Support\Str;

class Cocoking extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img_page',
        'section',
        'description1',
        'description2',
        'order',
    ];

    public function markdowntransform(){
        return  Str::limit(app(MarkdownRenderer::class)->toHtml($this->description), 80);
    }
}
