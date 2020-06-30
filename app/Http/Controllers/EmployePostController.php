<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Employe_post;
class EmployePostController extends SuperController
{
    public function __construct(employe_post $model)
    {
        parent::__construct($model);
    }


    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['employe','post'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;

        console.log($list);
    }

    
    public function getPostByIdemploye($idemploye){
        return $this->_context
        ->where('idemploye', $idemploye)
        ->where('dateFin',null)
        ->with(['post', 'employe']) 
        ->first();
    }

    public function getPost(){

   

        // $list =  $this->_context
        //               ->select(DB::raw('select count(id) as count , sexe , year(dateEmbauche) as year '))
        //               ->groupBy('sexe','year(dateEmbauche)')
        //               ->get();

        $l = DB::select('select count(ec.idemploye) as count ,c.libelle
        from employe_posts ec
        join posts c on ec.idpost = c.id
        group by c.libelle
        ');
    
                      return $l;
        }




}
