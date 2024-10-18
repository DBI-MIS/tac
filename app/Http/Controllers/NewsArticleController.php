<?php

namespace App\Http\Controllers;

use App\Models\Newsarticle;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class NewsArticleController extends Controller
{
  
    public function index()
    {
        return view('news.index');
    }



    public function show(Newsarticle $newsarticle)
    {
        $postUrl = route('newsarticles.show', $newsarticle->slug);
        $postTitle = $newsarticle->title;


        $shareComponent = ShareFacade::page(
            $postUrl,
            $postTitle,
            [
                'class' => 'my-class',
                'id' => 'my-id',
                'title' => 'Share '. $postTitle,
                'rel' => 'nofollow noopener noreferrer',]
            )
        ->facebook()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();       

        return view('news.show',[
            'newsarticle' => $newsarticle,
            'shareComponent' => $shareComponent,
        ]);
    }

   
   
}
