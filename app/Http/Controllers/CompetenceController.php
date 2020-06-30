<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Competence;
class CompetenceController extends SuperController
{
    

    public function __construct(competence $model)
    {
        parent::__construct($model);
    }

    public function getCountCompetence(){

        //    $homme = $this->_context->where('sexe', $id)
        //         ->whereMonth('dateRetard', $month)
        //         ->count()
        //         ;
    
        $list =  $this->_context
                      ->select('libelle',DB::raw('count(*) as count'))
                      ->groupBy('libelle')
                      ->get();
    
                      return $list;
        }

}
