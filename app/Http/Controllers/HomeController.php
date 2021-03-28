<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hotels;
use App\booking;
use Illuminate\Support\Facades\Storage;
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
        $allhotels = DB::table('hotels')->where('users_id', auth()->user()->id)->get();
        return view('home')->with('allhotels',$allhotels);
    }
   //

public function rooms(){
    $allrooms = DB::table('rooms')->where('users_id', auth()->user()->id)->get();
    return view('rooms')->with('allrooms', $allrooms);
}
public function addHotel(Request $request){
   $request->validate([
        'name'=>'required',
        'province'=>'required',
        'district'=>'required',
        'email'=>'required|unique:hotels',
        'telephone'=>'required',
        'file'=>'required'
    ]);
    if($request->hasFile('file')){
        $file=$request->file('file')->getClientOriginalName();
        $request->file->storeAs('Hotels', $file, 'public');
        $hotels = new Hotels();
    $hotels->users_id = $request->users_id;
    $hotels->name = $request->name;
    $hotels->province = $request->province;
    $hotels->district = $request->district;
    $hotels->email = $request->email;
    $hotels->telphone = $request->telephone;
    $hotels->file=$file;
    $hotels->save();
    }

    return redirect('home')->with('success', 'Hotel has been added');
}

}
