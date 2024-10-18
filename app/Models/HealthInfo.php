<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelMarkdown\MarkdownRenderer;

class HealthInfo extends Model
{
    use HasFactory;

    protected $cast = [
        'featured' => 'boolean',
        'status' => 'boolean',
    ];

    protected $fillable = [
        'title',
        'img',
        'status',
        'featured',
        'description',
        'chemical_structure',
        'characteristics',
        'process',
        'effect',
        'age',
        'order',
    ];

    public function markdownTransform()
    {
        $markdown = app(MarkdownRenderer::class);

        return [
            'description' => $markdown->toHtml($this->description),
            'chemical_structure' => $markdown->toHtml($this->chemical_structure),
            'characteristics' => $markdown->toHtml($this->characteristics),
            'process' => $markdown->toHtml($this->process),
            'effect' => $markdown->toHtml($this->effect),
            'age' => $markdown->toHtml($this->age),
        ];
    }
}
