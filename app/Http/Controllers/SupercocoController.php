<?php

namespace App\Http\Controllers;

use App\Models\Cocoking;
use App\Models\OrganicProduct;
use App\Models\Page;
use App\Models\TacPage;
use Illuminate\Http\Request;

class SupercocoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $fillers = [
            'filler_page_vco', 
            'filler_page_video', 
            'filler_page_factory', 
        ];
        $sections = [
            'headline',
            'introduction',
            'subheadline',
            'testimonials',
            'supercoco_bottom',
            'choose_supercoco1',
            'choose_supercoco2',
            'choose_supercoco3',

        ];
        $mainPages = [];
        $superPages = [];
        foreach($sections as $section){
            $superPages[$section] = TacPage::where('section', $section)
        ->latest('created_at')
        ->first();
        }
        $testimonials = Cocoking::orderBy('order', 'desc')
        ->where('section', 'testimonials')
        ->take(4)
        ->get();
        foreach ($fillers as $filler) {
            $mainPages[$filler] = Page::where('section', $filler)
                ->latest('created_at')
                ->first();
        }
        foreach($sections as $section){
            $cocoPages[$section] = Cocoking::where('section', $section)
        ->latest('created_at')
        ->first();
        }
        $featuredSupercocos = OrganicProduct::where('featured', true)
        ->latest('created_at')
        ->wherehas('product_brand', function($brand) {
            $brand->where('name','Supercoco');
        })
        ->take(4)
        ->get([
            'id',
            'slug',
            'title',
            'product_img',
            'description',
            'brand_id',
        ]);
        return view('supercoco', [
            'mainPages' => $mainPages,
            'superPages' => $superPages,
            'cocoPages' => $cocoPages,
            'featuredSupercocos' =>  $featuredSupercocos,
            'testimonials' => $testimonials,
        ]);
    
    }
}
