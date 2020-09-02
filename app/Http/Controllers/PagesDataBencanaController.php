<?php

namespace App\Http\Controllers;

use App\Bencana;
use Illuminate\Http\Request;

class PagesDataBencanaController extends Controller
{
    public function index()
    {
        $data_bencana = \App\Bencana::with('jenis_bencana')->get();
        // dd($data_bencana);
        return view ('/homepages/data_bencana', ['data_bencana' => $data_bencana]);
    }
}
