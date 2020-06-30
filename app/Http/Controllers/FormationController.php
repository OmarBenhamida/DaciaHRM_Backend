<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
class FormationController extends SuperController
{
    public function __construct(formation $model)
    {
        parent::__construct($model);
    }
    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }
}
