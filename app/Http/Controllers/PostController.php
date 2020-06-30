<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends SuperController
{
    public function __construct(post $model)
    {
        parent::__construct($model);
    }
}
