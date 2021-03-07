<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    public function getroom(){
        return $this->belongsTo('App\Rooms');
    }
}
