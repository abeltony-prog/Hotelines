<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    //
    protected $fillable = [
        'users_id','name','province','district','email','file'
    ];

    protected $table = "hotels";

    public function getroom(){
        return $this->hasMany('App\Rooms');
        function gettable(){
            return $this->hasMany('App\Tables');
        }
        function getbooking(){
            return $this->hasMany('App\booking');
        }
    }

}
