<?php

namespace App\Http\Controllers;

use App\Posko;
use Illuminate\Http\Request;

class PagesDataPoskoController extends Controller
{
    public function index()
    {
        $data_posko = \App\Posko::with('jenis_bencana')->get();
        return view ('homepages/data_posko', ['data_posko' => $data_posko]);
    }
}
