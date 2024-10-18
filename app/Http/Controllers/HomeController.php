<?php

namespace App\Http\Controllers;

use App\Models\Newsarticle;
use App\Models\OrganicProduct;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;

class HomeController extends Controller
{
    // public $showSuccessMessage = '';
    // public $showModal = false;
    public $isModalOpen = false;
    public function __invoke(Request $request)
    {

        // $this->$showModal = true;

    $sections = [
        'hero', 
        'global_brand', 
        'dealership', 
        'certification'
    ];
    $mainPages = [];

    foreach ($sections as $section) {
        $mainPages[$section] = Page::where('section', $section)
            ->latest('created_at')
            ->first();
    }

    $featuredProducts = Product::where('featured', true)
        ->latest('created_at')
        ->with('product_brand:id,name,brand_logo')
        ->take(4)
        ->get([
            'id',
            'slug',
            'title',
            'product_img',
            'description',
            'brand_id',
        ]);

        $featuredOrganicProducts = OrganicProduct::where('featured', true)
        ->latest('created_at')
        ->with('product_brand:id,name,brand_logo')
        ->take(4)
        ->get([
            'id',
            'slug',
            'title',
            'product_img',
            'description',
            'brand_id',
        ]);

    $featuredProjects = Project::where('featured', true)
        ->latest('created_at')
        ->take(4)
        ->get();

        $featuredNewsArticles = Newsarticle::orderBy('published_at', 'desc')
        ->where('is_featured', true)
        ->take(3)
        ->get();

        return view('home', [
            'mainPages' => $mainPages,
            'featuredProducts' => $featuredProducts,
            'featuredOrganicProducts' => $featuredOrganicProducts,
            'featuredProjects' => $featuredProjects,
            'featuredNewsArticles' => $featuredNewsArticles,
        ]);
    }
}
