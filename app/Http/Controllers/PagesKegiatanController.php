<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesKegiatanController extends Controller
{
    public function index()
    {
        $data_kegiatan = \App\Kegiatan::all();
        return view ('homepages/home_kegiatan', ['data_kegiatan' => $data_kegiatan]);
    }

    public function footer()
    {
        $data_kegiatan = \App\Kegiatan::all();
        return view ('homepages/footer', ['data_kegiatan' => $data_kegiatan]);
    }
}
