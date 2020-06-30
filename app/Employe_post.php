<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe_post extends Model
{
    protected $guarded = []; 
     public function employe()
    {
        return $this->belongsTo('App\Employe', 'idemploye');
    }
    public function post()
    {
        return $this->belongsTo('App\Post', 'idpost');
    }

  

}
