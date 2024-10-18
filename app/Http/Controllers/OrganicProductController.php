<?php

namespace App\Http\Controllers;

use App\Models\OrganicCategory;
use App\Models\OrganicProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class OrganicProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organiccategories = Cache::remember('organicproductorganiccategories', now(), function () {
            return OrganicCategory::whereHas('organicproducts', function ($query) {
                $query->published();
            })->take(20)->get();
        });

        return view(
            'organicproduct.index',
            [
                'organiccategories' => $organiccategories,

            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(OrganicProduct $organicproduct)
    {
        return view('organicproduct.show', ['organicproduct'=>$organicproduct]);
    }

    
}
