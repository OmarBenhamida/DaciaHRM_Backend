<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conge;

class CongeController extends SuperController
{
    public function __construct(conge $model)
    {
        parent::__construct($model);
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
