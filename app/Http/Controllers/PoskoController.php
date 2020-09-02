<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PoskoController extends Controller
{
    public function posko()
    {
        $data_posko = \App\Posko::with('jenis_bencana')->get();
        $jenis_bencana = \App\Jenis::all();
        return view ('admins/data/posko', ['data_posko' => $data_posko,
        'jenis_bencana'=>$jenis_bencana]);
    }

    public function create(Request $request)
    {

        $data=$request->all();
        $data['foto_posko'] = $request->file('foto_posko')->store(
            'assets/gallery', 'public'
        );

        $config=[
            'table'=>'posko', 'field'=>'id_posko', 'length'=>7,'prefix'=>'POS-'
        ];
        $id = IdGenerator::generate($config);


        $data['id_posko']= $id;


        \App\Posko::create($data);
        return redirect ('/admins/data/posko');
    }

    public function edit(Request $request, $id)
    {

        $posko = \App\Posko::find($id);
        $bencana = \App\Jenis::all();
        return view ('admins/data/editposko',[
            'items'=>$posko,
            'bencana'=>$bencana
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $posko = \App\Posko::findOrFail($id);

        $posko->update($data);

        return redirect('/admins/data/posko');
    }

    public function hapus($id)
    {
        $posko = \App\Posko::findOrFail($id);

        $posko->delete();

        return redirect('/admins/data/posko');
    }

    public function exportPdf()
    {
        $posko = \App\Posko::all();
        $pdf = PDF::loadview('export.exportposko', ['data_posko' => $posko]);
        return $pdf->download('posko.pdf');
    }
}
