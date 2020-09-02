<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BencanaController extends Controller
{
    public function bencana()
    {
        $data_bencana = \App\Bencana::with('jenis_bencana')->get();
        $jenis_bencana = \App\Jenis::all();
        return view ('admins/data/bencana', ['data_bencana' => $data_bencana,
        'jenis_bencana'=> $jenis_bencana]);
    }

    public function create(Request $request)
    {

        $data=$request->all();
        $data['foto_bencana'] = $request->file('foto_bencana')->store(
            'assets/gallery', 'public'
        );

        $config=[
            'table'=>'bencana', 'field'=>'id_bencana', 'length'=>7,'prefix'=>'BEN-'
        ];
        $id = IdGenerator::generate($config);


        $data['id_bencana']= $id;

        \App\Bencana::create($data);
        return redirect ('/admins/data/bencana');
    }


    public function edit($id)
    {
        $bencana = \App\Bencana::find($id);
        $jenis_bencana = \App\Jenis::all();
        return view ('admins/data/editbencana',[
            'items'=>$bencana,
            'jenis_bencana'=>$jenis_bencana
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $bencana = \App\Bencana::findOrFail($id);

        $bencana->update($data);

        return redirect('/admins/data/bencana');
    }

    public function delete($id)
    {
        $bencana = \App\Bencana::findOrFail($id);
        $bencana->delete();
        return redirect('/admins/data/bencana');
    }

    public function exportPdf()
    {
        $bencana = \App\Bencana::all();
        $pdf = PDF::loadview('export.exportbencana', ['data_bencana' => $bencana])->setPaper('a4', 'landscape');
        return $pdf->download('bencana.pdf');
    }

    public function exportBencana(Request $request)
    {
        $bencana = \App\Bencana::where('id_jenis_bencana',$request->id_jenis_bencana)->get();
        $pdf = PDF::loadview('export.exportbencana', ['data_bencana' => $bencana])->setPaper('a4', 'landscape');
        return $pdf->download('jenis_bencana.pdf');
    }

}
