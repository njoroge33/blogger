<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blogs::take(6)->orderBy('created_at','desc')->get();

        return view('frontend.home', compact('blogs'));
    }
}
