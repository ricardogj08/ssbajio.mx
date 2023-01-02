<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index()
    {
        return view('website/services/index');
    }
}
