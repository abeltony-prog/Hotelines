<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hotels;
use Illuminate\Support\Facades\Storage;
class HotelController extends Controller
{
    //
    public function dashboard(){
        //$allHotels = Hotels::where();
        $allHotels = DB::table('hotels')->where('users_id', auth()->user()->id)->get();
        return view('dashboard')->with('allHotels', $allHotels);
    }

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

        return redirect('dashboard')->with('success', 'Hotel has been added');
    }
}
