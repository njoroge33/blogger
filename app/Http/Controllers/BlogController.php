<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blogs::orderBy('created_at','desc')->get();

        return view('frontend.blog', compact('blogs'));
    }

    public function view($id, Request $request)
    {
        $blog = Blogs::findOrFail($id);;

        return view('frontend.view', compact('blog'));
    }
}