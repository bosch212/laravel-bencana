<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class JenisController extends Controller
{
    public function jenis()
    {
        $jenis_bencana = \App\Jenis::all();
        return view ('admins/master/jenis', ['jenis_bencana' => $jenis_bencana]);
    }

    public function create(Request $request)
    {
        $config=[
            'table'=>'jenis_bencana', 'field'=>'id_jenis_bencana', 'length'=>5,'prefix'=>'BA-'
        ];
        $id = IdGenerator::generate($config);


        $data = $request->all();
        $data['id_jenis_bencana']= $id;

        \App\Jenis::create($data);

        return redirect('admins/master/jenis')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $jenis_bencana = \App\Jenis::find($id);

        return view ('admins/master/edit',[
            'items'=> $jenis_bencana
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $jenis_bencana = \App\Jenis::findOrFail($id);

        $jenis_bencana>update($data);

        return redirect('/admins/master/jenis');
    }

    public function hapus($id)
    {
        $jenis_bencana = \App\Jenis::findOrFail($id);

        $jenis_bencana->delete();

        return redirect('/admins/master/jenis');
    }
}


