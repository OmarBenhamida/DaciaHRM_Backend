<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Diplome;
class DiplomeController extends SuperController
{
    public function __construct(diplome $model)
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
