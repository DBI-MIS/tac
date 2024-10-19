<?php

namespace App\Http\Controllers;

use App\Models\Cocokingpage;
use App\Models\OrganicProduct;
use App\Models\Page;
use App\Models\TacPage;
use Illuminate\Http\Request;

class CocokingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        
        $sections = [
            'headline',
            'subheadline',
            'body',
            'choose_cocoking1',
            'choose_cocoking2',
            'choose_cocoking3',
            'choose_cocoking4',
            'choose_cocoking5',
            'choose_cocoking6',
            'cocoking_bottom',
            'introduction',
    

        ];

        $cocoPages = [];

        $testimonials = TacPage::orderBy('order', 'desc')
        ->where('section', 'testimonials')
        ->take(4)
        ->get();

        
        foreach($sections as $section){
            $cocoPages[$section] = Cocokingpage::where('section', $section)
            ->orderBy('order', 'desc')
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

        $featuredCocokings = OrganicProduct::where('featured', true)
        ->latest('created_at')
        ->wherehas('product_brand', function($brand) {
            $brand->where('name','Cocoking');
        })
        // ->with('product_brand:id,name,brand_logo')
        ->take(4)
        ->get([
            'id',
            'slug',
            'title',
            'product_img',
            'description',
            'brand_id',
        ]);
        
        return view('cocoking',[
            'cocoPages' => $cocoPages,
            'mainPages' => $mainPages,
            'featuredCocokings' => $featuredCocokings,
            'testimonials' => $testimonials
        ]);
    }
}
