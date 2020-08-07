<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function avatar(Request $request){
        if($request->hasFile('fileToUpload')){
            $name=$request->file('fileToUpload')->getClientOriginalName();
            $path = $request->fileToUpload->storeAs('images', $name, 'public');
           // echo $name;
            //dd($request->all());
            auth()->user()->update(['avatar'=> $name]);
            
        }
        return redirect()->back();
      //  @endif
    }
}
