<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absence;

class AbsenceController extends SuperController
{
    
    public function __construct(absence $model)
    {
        parent::__construct($model);
    }

    public function countAbsByUser(int $month, int $id) {
        return $this->_context->where('idemploye', $id)
            ->whereMonth('dateRetard', $month)
            ->count()
            ;
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['employe'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }

    
}
