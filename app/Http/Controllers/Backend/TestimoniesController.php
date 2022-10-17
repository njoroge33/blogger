<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonies;
use Yajra\DataTables\DataTables;
use DateTime;




class testimoniesController extends Controller
{

    public function index(Request $request)
  
  {
    if ($request->ajax()) {
      $data = Testimonies::all();
    //   dd($data);
      return Datatables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function($data){

                     $btn = '<a href="'.route('test.edit',$data->testimony_id) .'" class="edit btn btn-primary btn-sm">Edit</a>';

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
    
      return view('backend.testimonies.index');
  }


  public function create()
  
  {
    
      return view('backend.testimonies.create');
  }

  public function edit($id,Request $request)
  
  {

    $test = Testimonies::findOrFail($id);
    
      return view('backend.testimonies.edit', compact('test'));
  }

  public function update($id,Request $request)
  
  {
    // dd($request);

    $test = Testimonies::findOrFail($id);

    $test = $test->update([
        'testimony_body' => $request->desc,
        'testimony_owner' => $request->owner,
        'testimony_url' => $request->url,
    ]);

return redirect()->route('test.index' )->withSuccess('Testimony successfully updated');

  }


  public function store(Request $request)
  
  {

    $test = Testimonies::create([
      'testimony_body' => $request->desc,
      'testimony_owner' => $request->owner,
      'testimony_url' => $request->url,
  ]);

  if($test){
  return redirect()->route('test.index' )->withSuccess('Testimony successfully created');
  }
  return redirect()->route('test.index' )->withError('Testimony not successfully created');

  }
   
}