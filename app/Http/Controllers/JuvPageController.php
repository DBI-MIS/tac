<?php

namespace App\Http\Controllers;

use App\Models\Cocoking;
use App\Models\Juvpage;
use App\Models\OrganicProduct;
use App\Models\Page;
use Illuminate\Http\Request;

class JuvPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $sections = [
            'headline',
            'subheadline',
            'choose_juv1',
            'choose_juv2',
            'choose_juv3',
            'choose_juv4',
            'juv_bottom',
            'introduction',
            'testimonials',
    

        ];

        $juvPages = [];

        $testimonials = Cocoking::orderBy('order', 'desc')
        ->where('section', 'testimonials')
        ->take(4)
        ->get();

        
        foreach($sections as $section){
            $juvPages[$section] = Juvpage::where('section', $section)
            ->latest('created_at')
            ->first();
        }
        

        $fillers = [
            'filler_page_vco', 
            'filler_page_video', 
            'filler_page_factory', 
        ];
        $mainPages = [];
    
        foreach ($fillers as $filler) {
            $mainPages[$filler] = Page::where('section', $filler)
                ->latest('created_at')
                ->first();
        }

        $featuredJuvs = OrganicProduct::where('featured', true)
        ->latest('created_at')
        ->wherehas('product_brand', function($brand) {
            $brand->where('name','JUV');
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
        // dd($featuredCocoking );
        
        return view('juv',[
            'juvPages' => $juvPages,
            'mainPages' => $mainPages,
            'featuredJuvs' => $featuredJuvs,
            'testimonials' => $testimonials
        ]);
    }
}
