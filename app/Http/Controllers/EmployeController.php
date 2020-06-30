<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employe;

class EmployeController extends SuperController
{
    public function __construct(employe $model)
    {
        parent::__construct($model);
    }

  

    public function getbyMatricule($Matricule)
    {
        return $this->_context->where('Marticule', $Matricule) ->first();
    }


    public function getbyCin($cin)
    {
        return $this->_context->where('cin', $cin) ->first();
    }

    public function getCountSexe(){

   

    $list =  $this->_context
                  ->select('sexe',DB::raw('count(*) as count'))
                  ->groupBy('sexe')
                  ->get();

                  return $list;
    }

    public function getCountSexeParAn(){

   

        // $list =  $this->_context
        //               ->select(DB::raw('select count(id) as count , sexe , year(dateEmbauche) as year '))
        //               ->groupBy('sexe','year(dateEmbauche)')
        //               ->get();

        $l = DB::select('select count(id) as count , sexe , year(dateEmbauche) as year
        from employes
        group by sexe,year(dateEmbauche)');
    
                      return $l;
        }

    


}
