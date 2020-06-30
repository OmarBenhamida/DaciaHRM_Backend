<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe_formation extends Model
{
    protected $guarded = [];
    public function employe()
    {
        return $this->belongsTo('App\Employe', 'idemploye');
    }
    public function formation()
    {
        return $this->belongsTo('App\Formation', 'idformation');
    }
}
