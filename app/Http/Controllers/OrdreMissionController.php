<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrdreMission;
class OrdreMissionController extends SuperController
{
    public function __construct(ordremission $model)
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
