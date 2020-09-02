<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class KerusakanController extends Controller
{
    public function kerusakan ()
    {
        $data_kerusakan = \App\Kerusakan::with('jenis_bencana')->get();
        $jenis_bencana = \App\Jenis::all();
        return view ('admins/data/kerusakan', ['data_kerusakan' => $data_kerusakan,
        'jenis_bencana' => $jenis_bencana]);

    }

    public function create (Request $request)
    {
        $config=[
            'table'=>'kerusakan', 'field'=>'id_kerusakan', 'length'=>7,'prefix'=>'RUS-'
        ];
        $id = IdGenerator::generate($config);


        $data = $request->all();
        $data['id_kerusakan']= $id;

        \App\Kerusakan::create($data);
        return redirect('admins/data/kerusakan');
    }

    public function edit($id)
    {
        $kerusakan = \App\Kerusakan::find($id);
        $bencana = \App\Jenis::all();
        return view ('admins/data/editrusak',[
            'items'=>$kerusakan,
            'bencana'=>$bencana
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $kerusakan = \App\Kerusakan::findOrFail($id);

        $kerusakan->update($data);

        return redirect('/admins/data/kerusakan');
    }

    public function hapus($id)
    {
        $kerusakan = \App\Kerusakan::findOrFail($id);

        $kerusakan->delete();

        return redirect('/admins/data/kerusakan');
    }

    public function ExportPDF()
    {
         $kerusakan = \App\Kerusakan::all();
         $pdf = PDF::loadview('export.exportkerusakan', ['data_kerusakan' => $kerusakan]);
         return $pdf->download('kerusakan.pdf');
    }

    public function detail($id)
    {
        $id=$id;
        return view ('admins.data.detail_kerusakan', compact('id'));
    }

    public function store(Request $request, $id)
    {
        $config=[
            'table'=>'detail_kerusakan', 'field'=>'id_detail_kerusakan', 'length'=>7,'prefix'=>'DRS-'
        ];
        $id_detail_kerusakan = IdGenerator::generate($config);

        $jumlah = \App\Kerusakan::findOrFail($id);

        if($request->jenis_kerusakan_rumah == 'berat'){
            $data = $request->all();
            $data['id_detail_kerusakan'] = $id_detail_kerusakan;
            $data['id_kerusakan']= $id;
            $jumlah['berat'] +=1;
            $jumlah->save();

            \App\Detail_Kerusakan::create($data);
            return redirect('/admins/data/kerusakan');
        }
       else if($request->jenis_kerusakan_rumah == 'sedang'){
            $data = $request->all();
            $data['id_detail_kerusakan'] = $id_detail_kerusakan;
            $data['id_kerusakan']= $id;
            $jumlah['sedang'] +=1;
            $jumlah->save();

            \App\Detail_Kerusakan::create($data);
            return redirect('/admins/data/kerusakan');
        }

        else if($request->jenis_kerusakan_rumah == 'ringan'){
            $data = $request->all();
            $data['id_detail_kerusakan'] = $id_detail_kerusakan;
            $data['id_kerusakan']= $id;
            $jumlah['ringan'] +=1;
            $jumlah->save();

            \App\Detail_Kerusakan::create($data);
            return redirect('/admins/data/kerusakan');
        }
    }

    public function view_detail_berat($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','berat')->get();

        return view ('/admins/data/view_detail_kerusakan_berat',compact('detail_kerusakan'));
    }

    public function view_detail_sedang($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','sedang')->get();

        return view ('/admins/data/view_detail_kerusakan_sedang',compact('detail_kerusakan'));
    }

    public function view_detail_ringan($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','ringan')->get();

        return view ('/admins/data/view_detail_kerusakan_ringan',compact('detail_kerusakan'));
    }

    public function exportPdf_berat($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','berat')->get();
        $pdf = PDF::loadview('export.exportberat', ['detail_kerusakan' => $detail_kerusakan]);
        return $pdf->download('kerusakan_rumah_berat.pdf');
    }

    public function exportPdf_sedang($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','sedang')->get();
        $pdf = PDF::loadview('export.exportsedang', ['detail_kerusakan' => $detail_kerusakan]);
        return $pdf->download('kerusakan_rumah_sedang.pdf');
    }

    public function exportPdf_ringan($id)
    {
        $detail_kerusakan = \App\Detail_Kerusakan::where('id_kerusakan', $id)->where('jenis_kerusakan_rumah','ringan')->get();
        $pdf = PDF::loadview('export.exportringan', ['detail_kerusakan' => $detail_kerusakan]);
        return $pdf->download('kerusakan_rumah_ringan.pdf');
    }
}
