<?php

namespace App\Http\Controllers;

use Illuminate \Http\Request;

class AdminController extends Controller
{
    public function app()
    {
        return view ('layouts/app');
    }
}
