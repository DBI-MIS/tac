<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Cache::remember('productcategories', now(), function () {
            return Category::whereHas('products', function ($query) {
                $query->published();
            })->take(20)->get();
        });

        return view(
            'product.index',
            [
                'categories' => $categories,

            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', ['product'=>$product]);
    }

}
