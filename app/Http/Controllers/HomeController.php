<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Testimonies;
use App\Models\Subscribers;

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

        $tests = Testimonies::take(3)->orderBy('created_at','desc')->get();

        return view('frontend.home', compact('blogs', 'tests'));
    }

    public function subscribe(Request $request){

        
        $this->validate($request, [
            "name" => "required",
            "email" => "required|email",
        ]);

        $sub = Subscribers::create([
            'first_name' => $request->name,
            'email' => $request->email,
        ]);

        if ($sub) {
            return redirect()->route('home')->withSuccess('Subscription successfully');
        } else {
            return redirect()->route('home')->withError('Subscription not successfully');
        }
      
    }
}
