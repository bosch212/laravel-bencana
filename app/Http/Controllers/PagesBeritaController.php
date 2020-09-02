<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesBeritaController extends Controller
{
    public function index()
    {
        $data_berita = \App\Berita::all();
        return view ('homepages/home_berita', ['data_berita' => $data_berita]);    }
}
