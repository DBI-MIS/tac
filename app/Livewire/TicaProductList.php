<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class TicaProductList extends Component
{

    #[Computed()]
    public function products()
    {
        return Product::with('product_brand')
            ->whereHas('product_brand', function($query) {
                $query->where('name', 'TICA');
            })
            ->where('status', true)
            ->orderBy('created_at')
            ->paginate(8);
    }
    public function render()
    {
        return view('livewire.tica-product-list');
    }
}
