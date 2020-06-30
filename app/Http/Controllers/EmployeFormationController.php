<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe_formation;
class EmployeFormationController extends SuperController
{
    public function __construct(employe_formation $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['employe','formation'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }
}
