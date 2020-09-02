<?php

namespace App\Http\Controllers;

use App\Kerusakan;
use Illuminate\Http\Request;

class PagesKerusakanController extends Controller
{
    public function index()
    {
        $items = Kerusakan::all();
        return view ('homepage/tampilrusak', [ 'items'=> $items]);
    }
}
