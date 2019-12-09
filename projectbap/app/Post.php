<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//   protected $table="ports";
    protected $table = "posts";
    public function user(){
        return $this->belongsTo('App\User','userId');
    }

}
