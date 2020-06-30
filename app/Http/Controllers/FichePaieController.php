<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FichePaie;
class FichePaieController extends SuperController
{
    public function __construct(fichePaie $model)
    {
        parent::__construct($model);
    }
}
