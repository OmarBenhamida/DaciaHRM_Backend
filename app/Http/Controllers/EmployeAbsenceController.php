<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employe_absence;

class EmployeAbsenceController extends SuperController
{
    public function __construct(employe_absence $model)
    {
        parent::__construct($model);
    }


    
}
