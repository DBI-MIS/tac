<?php

namespace App\Livewire;

use App\Models\OrganicCategory;
use App\Models\OrganicProduct;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class OrganicProductList extends Component
{

    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public ?string $search = '';

    #[Url()]
    public $organiccategory = '';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        
    }
    public function filterByCategory($activeCategory)
    {
        $this->organiccategory = $activeCategory;
        $this->resetPage();
    }
    
    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->organiccategory = '';
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->organiccategory = '';
        $this->resetPage();
    }

    #[Computed()]
    public function organicproducts()
    {
       
        return OrganicProduct::orderBy('updated_at', $this->sort)
        ->where('status', true)
        ->when($this->activeCategory, function ($query) {
            $query->withCategory($this->organiccategory);
        })
        ->where(function($query) {
            $query->whereRaw('LOWER(title) like LOWER(?)', ["%{$this->search}%"])
                  ->orWhereRaw('UPPER(title) like UPPER(?)', ["%{$this->search}%"]);
        })
        ->paginate(8);
    }
    
    #[Computed()]
    public function activeCategory()
    {
        return OrganicCategory::where('slug', $this->organiccategory)
        // ->whereRaw('LOWER(title) like ?', ["%{$this->search}%"])
        ->first();
    }

    public function render()
    {
        return view('livewire.organic-product-list');
    }
}
