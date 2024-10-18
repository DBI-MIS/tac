<?php

namespace App\Http\Controllers;

use App\Models\HealthInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HealthInfoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $titles = [
            'Virgin Coconut Oil', 
            'Other Oils', 
            'Sunflower Oil', 
            'Olive Oil',
            'Peanut Oil',
            'Corn Oil',
            'Canola Oil',
            'Soybean Oil',
            'Palm Oil',
        ];

        // Cache for 60 minutes
        $healthInfo = Cache::remember('healthInfo', 60, function() use ($titles) {
            return HealthInfo::whereIn('title', $titles)
                ->where('status', true)
                ->where('featured', true)
                ->latest('created_at')
                ->get();
        });

        $healthPages = [];
        foreach ($titles as $title) {
            $healthPages[$title] = $healthInfo->firstWhere('title', $title);
        }

        return view('health-info', [
            'healthPages' => $healthPages,
        ]);
    }
}
