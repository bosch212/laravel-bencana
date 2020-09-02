<?php

namespace App\Http\Controllers;
use App\Bencana;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PagesGrafikController extends Controller
{
    public function index()
    {
        $month_bencana= Carbon::now()->format('m');
        $year_bencana= Carbon::now()->format('Y');
        $bencana = Bencana::whereMonth('tanggal',$month_bencana)->whereYear('tanggal',$year_bencana)->count();

        // $bencana = \App\Bencana::find($id);
         $jenis_bencana = \App\Jenis::all();
        // data chart
        $dataGempa = [];
        $dataKebakaran = [];
        $dataBanjir = [];
        $dataLongsor = [];
        $dataTsunami = [];
        for($i = 1; $i < 13; $i++){
            $dataGempa[] = Bencana::where('id_jenis_bencana', 'BA-01')->whereMonth('tanggal',$i)->count();
            $dataKebakaran[] = Bencana::where('id_jenis_bencana', 'BA-02')->whereMonth('tanggal',$i)->count();
            $dataBanjir[] = Bencana::where('id_jenis_bencana', 'BA-03')->whereMonth('tanggal',$i)->count();
            $dataLongsor[] = Bencana::where('id_jenis_bencana', 'BA-04')->whereMonth('tanggal',$i)->count();
            $dataTsunami[] = Bencana::where('id_jenis_bencana', 'BA-05')->whereMonth('tanggal',$i)->count();



        }

        //dd($data);
        //dd($categories);
        return view ('homepages/grafik_bencana', [
            'dataGempa' => $dataGempa,
            'dataKebakaran' =>  $dataKebakaran,
            'dataBanjir' =>$dataBanjir,
            'dataLongsor' =>$dataLongsor,
            'dataTsunami' =>$dataTsunami
        ]);

    }
}
