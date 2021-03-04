<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    //
    protected $fillable = [
        'users_id','name','file'
    ];

    protected $table = "tables";

    public function gethotels(){
        return $this->belongsTo('App\Hotels');
    }

    public function gethotel(){
        return $this->belongsTo('App\Hotels');
    }
}
