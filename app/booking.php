<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    public function getroom(){
        return $this->belongsTo('App\Hotels');
    }
    public function gethotels(){
        return $this->HasMany('App/Hotels');
        function room(){
            return $this->HasMany('App/Rooms');
        }
    }
}
