<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profiler;

class ProfilerController extends Controller
{


    public function index()
    {
      $profiler =  Profiler::all();
      return view('page.main')->with('services', $profiler);
    }

    public function index1()
    {
      $data = array(
          'title' => 'index',
          'services' => ['Web Design', 'Programming', 'SEO']
      );

      return view('page.index')->with($data);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'title'=>'required',
          'body' =>'required'
        ]);

        if($request->hasFile('myfile')) {
          $filenameExt = $request->file('myfile')->getClientOriginalName();
          $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
          $ext = $request->file('myfile')->getClientOriginalExtension();
          $storeName = $filename.'_'.time().'.'.$ext;
          $path = $request->file('myfile')->storeAs( 'files', $storeName,  's3');
        }else {
          $storeName = 'somefile.txt';
        }

        $profiler = new Profiler;
        $profiler->title = $request->input('title');
        $profiler->body = $request->input('body');
        $profiler->myfile = $storeName;
        $profiler->save();

        return redirect('/');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}


//
// public function index() {
//   return view('page.main');
// }
//
// public function about() {
//   return view('page.about');
// }
//
// public function services() {
//   $data =  array (
//     'title' => 'services',
//     'services'=>['Web Design', 'SEO', 'Arts']
//   );
//   return view('page.services')->with($data);
// }
