<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Web extends BaseController
{
    public function __construct(){
        helper(['html']);
    }
    public function index()
    {
       return view('web/index');
    }
}
