<?php

namespace App\Http\Controllers;

use App\Kerusakan;
use Illuminate\Http\Request;

class PagesDataKerusakanController extends Controller
{
    public function index()
    {
        $data_kerusakan = \App\Kerusakan::with('jenis_bencana')->get();
        return view ('homepages/data_kerusakan', ['data_kerusakan' => $data_kerusakan]);
    }

    public function data_kerusakan_berat($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','berat')->get();

        return view ('/homepages/data_kerusakan_berat',compact('detail_kerusakan'));
    }

    public function data_kerusakan_ringan($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','ringan')->get();

        return view ('/homepages/data_kerusakan_ringan',compact('detail_kerusakan'));
    }

    public function data_kerusakan_sedang($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','sedang')->get();

        return view ('/homepages/data_kerusakan_sedang',compact('detail_kerusakan'));
    }
}
