<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class TicaProjectList extends Component
{
    public $category;

    public function mount($category = 'Semicon')
    {
        $this->category = $category;
    } 
    #[Computed()]
    public function projects()
    {
        return Project::orderBy('updated_at', 'desc')
            ->where('status', true)
            ->where('brand', "TICA Projects")
            ->where('category', $this->category)
            ->paginate(6);
    }
    public function render()
    {
        return view('livewire.tica-project-list');
    }
}
