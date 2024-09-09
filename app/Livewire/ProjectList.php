<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProjectList extends Component
{
    #[Computed()]
    public function projects()
    {
        return Project::orderBy('created_at', 'desc')
        ->where('status',true)
        ->where('featured', true)
        ->take(8)
        ->get();
    }

    public function render()
    {
        return view('livewire.project-list');
    }
}
