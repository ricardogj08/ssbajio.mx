<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Posts extends BaseController
{
    public function index()
    {
        return view('website/posts/index');
    }
}
