<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public ?string $search = '';

    #[Url()]
    public $category = '';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        
    }
    public function filterByCategory($activeCategory)
    {
        $this->category = $activeCategory;
        $this->resetPage();
    }
    
    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->category = '';
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    #[Computed()]
    public function products()
    {
        // return Product::orderBy('created_at')
        // ->where('status', true)
        // ->when($this->activeCategory, function ($query) {
        //     $query->withCategory($this->category);
        // })
        // ->where(function($query) {
        //     $query->whereRaw('LOWER(title) like ?', ["%{$this->search}%"])
        //           ->orWhereRaw('UPPER(title) like ?', ["%{$this->search}%"]);
        // })
        // ->paginate(8);
        return Product::orderBy('created_at', $this->sort)
        ->where('status', true)
        ->when($this->activeCategory, function ($query) {
            $query->withCategory($this->category);
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
        return Category::where('slug', $this->category)
        // ->whereRaw('LOWER(title) like ?', ["%{$this->search}%"])
        ->first();
    }

    public function render()
    {
        return view('livewire.product-list');
    }

    

    
}
