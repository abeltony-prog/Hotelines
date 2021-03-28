<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rooms;

class RoomsController extends Controller
{
    //
    public function addRooms($id){
        $hotels = DB::table('hotels')->where('id', $id)->get();
        return view('addRooms')->with('hotels',$hotels);
    }
    public function addh(Request $request){
        $request->validate([
            'type'=>'required|unique:rooms',
            'description'=>'required',
            'file'=>'required',
            'price'=>'required'
        ]);
        if($request->hasFile('file')){
            $file=$request->file('file')->getClientOriginalName();
            $request->file->storeAs('rooms', $file, 'public');

            $rooms = new Rooms();
            $rooms->hotels_id = $request->hotels_id;
            $rooms->type=$request->type;
            $rooms->description=$request->description;
            $rooms->file=$file;
            $rooms->price=$request->price;
            $rooms->save();
        }

        return back()->with('success', 'Room is add Successfully!!');

    }
}
