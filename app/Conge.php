<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    protected $guarded = [];
    public function employe()
    {
        return $this->belongsTo('App\Employe', 'idemploye');
    }
}
