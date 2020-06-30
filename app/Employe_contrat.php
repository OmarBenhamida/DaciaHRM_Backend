<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe_contrat extends Model
{
    protected $guarded = [];
    public function employe()
    {
        return $this->belongsTo('App\Employe', 'idemploye');
    }
    public function contrat()
    {
        return $this->belongsTo('App\Contrat', 'idcontrat');
    }
}
