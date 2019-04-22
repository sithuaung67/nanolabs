<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function singer(){
        return $this->belongsTo('App\Singer');
    }
    public function album(){
        return $this->belongsTo('App\Album');
    }

}
