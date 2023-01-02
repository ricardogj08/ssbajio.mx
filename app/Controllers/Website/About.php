<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        return view('website/about/index');
    }
}
