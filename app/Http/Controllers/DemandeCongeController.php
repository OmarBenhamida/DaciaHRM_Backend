<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DemandeConge;


class DemandeCongeController extends SuperController
{public function __construct(demandeconge $model)
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
