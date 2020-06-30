<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Employe_competence;
class EmployeCompetenceController extends SuperController
{
    public function __construct(employe_competence $model)
    {
        parent::__construct($model);
    }
    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['employe','competence'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }

    public function getCompetence(){

   

        // $list =  $this->_context
        //               ->select(DB::raw('select count(id) as count , sexe , year(dateEmbauche) as year '))
        //               ->groupBy('sexe','year(dateEmbauche)')
        //               ->get();

        $l = DB::select('select count(ec.idemploye) as count,c.libelle
        from employe_competences ec
        join competences c on ec.idcompetence = c.id
        group by c.libelle
        ');
    
                      return $l;
        }
}
