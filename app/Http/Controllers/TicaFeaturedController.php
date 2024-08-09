<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicaFeaturedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('product.tica-product');
    }
}
