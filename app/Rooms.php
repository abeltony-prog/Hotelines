<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
    protected $fillable = [
        'users_id','type','description','file'
    ];

    protected $table = "rooms";

    public function getUser(){
        return $this->belongsTo('App\User');
    }

    public function gethotel(){
        return $this->belongsTo('App\Hotels');
    }

    public function getbook(){
        return $this->hasMany('App\booking');
    }
}
