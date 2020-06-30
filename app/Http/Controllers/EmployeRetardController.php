<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe_retard;
class EmployeRetardController extends SuperController
{
    public function __construct(employe_retard $model)
    {
        parent::__construct($model);
    }

    
}
