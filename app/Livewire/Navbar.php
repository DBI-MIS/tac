<?php

namespace App\Livewire;

use App\Models\Newsarticle;
use Livewire\Component;

class Navbar extends Component
{
    public $recentArticles = [];

    public function mount()
    {
        $this->recentArticles = Newsarticle::orderBy('published_at', 'desc')
        ->where('is_featured', true)->take(3)->get();
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
