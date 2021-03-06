<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe_indimnite extends Model
{
    protected $guarded = [];
    public function employe()
    {
        return $this->belongsTo('App\Employe', 'idemploye');
    }
    public function indimnite()
    {
        return $this->belongsTo('App\Indimnite', 'idindimnite');
    }
}
