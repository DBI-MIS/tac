<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class GradProjectList extends Component
{
    public $category;


    public function mount($category = 'Domestic Engineering')
    {
        $this->category = $category;
    } 
   

    #[Computed()]
    public function projects()
    {
        return Project::orderBy('created_at')
            ->where('status', true)
            ->where('brand', "GRAD Projects")
            ->where('category', $this->category)
            ->paginate(8);
    }

    public function render()
    {
        return view('livewire.grad-project-list');
    }
}

