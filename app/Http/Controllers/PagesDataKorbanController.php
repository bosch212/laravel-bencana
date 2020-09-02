<?php

namespace App\Http\Controllers;

use App\Korban;
use Illuminate\Http\Request;

class PagesDataKorbanController extends Controller
{
    public function index()
    {
        $data_korban = \App\Korban::with('jenis_bencana')->get();
        return view ('homepages/data_korban', ['data_korban' => $data_korban]);
    }

    public function detail($id)
    {
        $id=$id;
        return view ('homepages.data_detail_meninggal', compact('id'));
    }

    public function data_detail_meninggal($id)
    {
        $detail_korban = \App\Detail_Korban::where('id_korban', $id)->where('jenis_korban','meninggal')->get();

        return view ('/homepages/data_detail_meninggal',compact('detail_korban'));
    }

    public function data_detail_luka($id)
    {
        $detail_korban = \App\Detail_Korban::where('id_korban', $id)->where('jenis_korban','luka_luka')->get();

        return view ('/homepages/data_detail_luka',compact('detail_korban'));
    }

    public function data_detail_hilang($id)
    {
        $detail_korban = \App\Detail_Korban::where('id_korban', $id)->where('jenis_korban','kehilangan')->get();

        return view ('/homepages/data_detail_hilang',compact('detail_korban'));
    }
}
