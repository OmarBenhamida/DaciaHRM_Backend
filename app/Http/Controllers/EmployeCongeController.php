<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe_conge;
class EmployeCongeController extends SuperController
{
    public function __construct(employe_conge $model)
    {
        parent::__construct($model);
    }
}
