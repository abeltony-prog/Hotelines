<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hotels;
use App\Rooms;
use App\booking;
use Illuminate\Support\Facades\Storage;
class HotelController extends Controller
{
    //
    public function dashboard(){
        //$allHotels = Hotels::where();
        //$allbookings = DB::table('bookings')->where('hotels_id', Hotels::get())->get();
        return view('dashboard');
    }

    public function rooms($id){
        $data = array(
            'hotel'=>Hotels::find($id),
            'allrooms'=>DB::table('rooms')->where('hotels_id', $id)->get(),
            'alltables'=>DB::table('tables')->where('hotels_id', $id)->get()
        );
        return view('rooms')->with($data);
    }
}
