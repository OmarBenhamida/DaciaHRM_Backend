<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe_competence extends Model
{
    protected $guarded = [];
    public function employe()
    {
        return $this->belongsTo('App\Employe', 'idemploye');
    }
    public function competence()
    {
        return $this->belongsTo('App\Competence', 'idcompetence');
    }
}
