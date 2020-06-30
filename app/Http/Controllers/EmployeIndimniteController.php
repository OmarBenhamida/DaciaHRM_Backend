<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe_indimnite;

class EmployeIndimniteController extends SuperController
{
    public function __construct(employe_indimnite $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['employe','indimnite'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;

        console.log($list);
    }
}
