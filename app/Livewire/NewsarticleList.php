<?php

namespace App\Livewire;

use App\Models\Newsarticle;
use Livewire\Attributes\Computed;
use Livewire\Component;

class NewsarticleList extends Component
{

    #[Computed()]
    public function newsarticles()
    {
        return Newsarticle::orderBy('published_at', 'desc')
        ->where('is_featured', true)
        ->take(8)
        ->get();
    }
    public function render()
    {
        return view('livewire.newsarticle-list');
    }
}
