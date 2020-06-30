<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Retard;
class RetardController extends SuperController
{
    public function __construct(retard $model)
    {
        parent::__construct($model);
    }

    public function sumAbsByUser(int $month, int $id) {
        return $this->_context->where('idemploye', $id)
            ->whereMonth('dateRetard', $month)
            ->sum('nb_heure')
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
