<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employe_contrat;
class EmployeContratController extends SuperController
{
    public function __construct(employe_contrat $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['employe','contrat'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }

    public function getContrat(){

        $l = DB::select('select count(ec.idemploye) as count,c.type
        from employe_contrats ec
        join contrats c on ec.idcontrat = c.id
        group by c.type
        ');
    
                      return $l;
        }
}
