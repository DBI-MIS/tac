<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $sections = [
            'about_page_title',
            'about_page_mission',
            'about_page_vision',
            'about_page_office',
            'about_page_showroom',
            'about_page_singapore',
            'about_page_shanghai',
        ];
        $mainPages = [];

        foreach ($sections as $section) {
            $mainPages[$section] = Page::where('section', $section)
                ->latest('created_at')
                ->first();
        }

        return view('about', [
            'mainPages' => $mainPages,
        ]);
    }
}
