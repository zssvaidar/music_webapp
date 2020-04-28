<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profiler;
use App\MusicItem;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ProfilerController extends Controller
{


  public function index()
  {
    $data = array(
      'title' => 'index',
      'services' => Profiler::all(),
      'items' => MusicItem::all()
    );

    return view('page.index')->with($data);
  }

  public function indexItems()
  {

    return view('page.market');
  }

  public function create()
  {
    //
  }
  public function tracks()
  {
    $data = array('services' => Profiler::all());

    return view('page.main')->with($data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required',
    ]);
    $file = new File($request->file('myfile'));

    if ($request->hasFile('myfile') or $file) {
      $filenameExt = $request->file('myfile')->getClientOriginalName();
      $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
      $ext = $request->file('myfile')->getClientOriginalExtension();
      $storeName = $filename . '_' . time() . '.' . $ext;
      // $size = $request->file('myfile')->getSize();
      // $path = $request->file('myfile')->storeAs('files', $storeName,  'azure');

      $path = $request->file('myfile')->storeAs('files', $storeName,  'azure');
    } else {
      $storeName = 'somefile.txt';
    }

    $profiler = new Profiler;
    $profiler->title = $request->input('title');
    // $profiler->url = Storage::disk('azure')->url($storeName);
    $profiler->url = $path;
    // $profiler->size = $size;
    $profiler->body = $request->input('body');
    $profiler->myfile = $storeName;
    $profiler->save();

    return redirect('/index');
  }

  public function show($id)
  {
    $dl = Profiler::find($id);
    // return response()->download(env('AZURE_STORAGE_URL') . '/files/' . $dl->myfile);
    return Storage::disk('azure')->download('files/' . $dl->myfile);
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
