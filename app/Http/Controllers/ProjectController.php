<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('projects.index');
        
    }

    
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show',[
            'project' => $project
        ]);
    }
    public function grad($category = 'Domestic Engineering')
    {
        return view('projects.grad', ['category' => $category]);
    }
    
    public function tica($category = 'Semicon'){
        return view('projects.tica', ['category' => $category]);
    }

    // public function grad($category = 'Hospital')
    // {
        
    //     $projects = Project::where('category', $category)->paginate(12);
    //     // dd($category);
    //     // dd($projects );
    //     return view('projects.grad', compact('projects', 'category'));
    // }



}
