<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rooms;
use App\booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class BookingController extends Controller
{
    //
    public function bookings($id){
        $data = array(
            'room'=>DB::table('rooms')->where('id', $id)->get(),
            'allbookings' => DB::table('bookings')->where('hotels_id',$id)->get()
        );
        return view('bookingList')->with($data);
    }
    public function book(Request $request){
        $request->validate([
            'nroom'=>"required",
            'adate'=>"required",
            'ldate'=>"required",
            'name'=>"required",
            'card'=>"required",
            'expdate'=>"required",
            'phone'=>"required"
        ]);
        $booking = new booking();
        $booking->hotels_id = $request->hotels_id;
        $booking->rooms_id = $request->rooms_id;
        $booking->nroom = $request->nroom;
        $booking->adate = $request->adate;
        $booking->ldate = $request->ldate;
        $booking->name = $request->name;
        $booking->card = $request->card;
        $booking->expdate = $request->expdate;
        $booking->phone = $request->phone;
        $booking->save();
        return redirect('/')->with('success', 'Thank you for booking');
    }
}
