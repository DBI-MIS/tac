<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class TicaProjectList extends Component
{
    public $category;

    public function mount($category = 'Hospital')
    {
        $this->category = $category;
    } 
    #[Computed()]
    public function projects()
    {
        return Project::orderBy('created_at')
            ->where('status', true)
            ->where('brand', "TICA Projects")
            ->where('category', $this->category)
            ->paginate(8);
    }
    public function render()
    {
        return view('livewire.tica-project-list');
    }
}
