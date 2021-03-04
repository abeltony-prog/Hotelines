<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tables;

class RestaurantController extends Controller
{
    //
    public function restaurant(){
        $alltables =  DB::table('tables')->where('users_id', auth()->user()->id)->get();
        return view('restaurant')->with('alltables', $alltables);
    }

    public function addTables(){
        $tables =  DB::table('hotels')->where('users_id', auth()->user()->id)->get();
        return view('addTables')->with('tables' , $tables);
    }

    public function add(Request $request){
        $request->validate([
            'name'=>'required|unique:tables',
            'file'=>'required',
            'price'=>'required'
        ]);

        if($request->hasfile('file')){
            $file=$request->file('file')->getClientOriginalName();
            $request->file->storeAs('Tables', $file, 'public');
            $tables= new Tables();
            $tables->users_id = $request->users_id;
            $tables->hotels_id = $request->hotels_id;
            $tables->name=$request->name;
            $tables->file=$file;
            $tables->price=$request->price;
            $tables->save();
        }

        return back()->with('success','Table added successfully');

    }
}
