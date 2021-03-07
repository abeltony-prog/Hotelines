<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rooms;
use App\Hotels;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Tables;

class welcomeController extends Controller
{
    //
    public function welcome(){
        $all = Hotels::all();
        return view('Welcome')->with('all', $all);
    }

    public function moretables($id){
        $data = array(
            'hotel'=>Hotels::find($id),
            'alltables'=>DB::table('tables')->where('hotels_id',$id)->get()
        );
        //$alltables = DB::table('tables')->where('hotels_id',$id)->get();
        return view('tablesmore')->with($data);
    }

    public function hotelmore($id){
        $data = array(
            'hotel'=>Hotels::find($id),
            'allrooms'=>Hotels::find($id)->getroom,
        );
        return view('hotelmore')->with($data);
    }

    public function booking($id){
        $room = Rooms::find($id);
        return view('booking')->with('room', $room);
    }
}
