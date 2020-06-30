<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe_mission;
class EmployeMissionController extends SuperController
{
    public function __construct(employe_mission $model)
    {
        parent::__construct($model);
    }
}
