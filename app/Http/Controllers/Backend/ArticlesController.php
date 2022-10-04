<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use Yajra\DataTables\DataTables;
use DateTime;




class ArticlesController extends Controller
{

    public function index(Request $request)
  
  {
    if ($request->ajax()) {
      $data = Blogs::all();
      // dd($data);
      return Datatables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function($data){

                     $btn = '<a href="'.route('blogs.edit',$data->article_id) .'" class="edit btn btn-primary btn-sm">Edit</a>';

                      return $btn;
              })
              ->editColumn('created_at', function ($data) {
                return $data->created_at ? with(new DateTime($data->created_at))->format('M d, Y') : '';
            })
            ->addColumn('image', function ($data) {
              $url= asset('storage/'.$data->image_url);

              return '<img src="'.$url.'" width="50px">';
          })
              ->rawColumns(['image','action'])
              ->make(true);
  }
  
  // return view('users');
    
      return view('backend.articles.index');
  }


  public function create()
  
  {
    
      return view('backend.articles.create');
  }

  public function edit($id,Request $request)
  
  {

    $blog = Blogs::findOrFail($id);
    
      return view('backend.articles.edit', compact('blog'));
  }

  public function update($id,Request $request)
  
  {
    // dd($request);

    $blog = Blogs::findOrFail($id);

    if ($request->hasfile('image_link')) {
      
    $image_link  = "blog_".time() . '.' . $request->image_link->extension();
    $request->file('image_link')->storeAs('uploads/', $image_link);

    $blog->update([
      'article_body' => $request->content,
      'title' => $request->content_title,
      'image_url' => $image_link,
      'description'=>$request->desc
  ]);

    
    return redirect()->route('blogs.index' )->withSuccess('Blog successfully updated');
}else{
  $blog->update([
    'article_body' => $request->content,
    'title' => $request->content_title,
    'description'=>$request->desc
]);
return redirect()->route('blogs.index' )->withSuccess('Blog successfully updated');
}
  }


  public function store(Request $request)
  
  {
    // dd($request);
    if (!$request->hasfile('image_link')) {
      return redirect()->back()->withError('A placeholder image has not been uploaded!!');
  }
    $image_link  = "blog_".time() . '.' . $request->image_link->extension();
    $request->file('image_link')->storeAs('uploads/', $image_link);

    $blog = Blogs::create([
      'article_body' => $request->content,
      'title' => $request->content_title,
      'image_url' => $image_link,
      'description'=>$request->desc
  ]);

  return redirect()->route('blogs.index' )->withSuccess('Blogs successfully created');
  }
   
}