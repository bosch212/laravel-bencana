<?php

namespace App\Http\Controllers;

use App\Bencana;
use Illuminate \Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data_bencana = \App\Bencana::with('jenis_bencana')->get();
        return view ('homepages/home', ['data_bencana' => $data_bencana]);
    }
}
