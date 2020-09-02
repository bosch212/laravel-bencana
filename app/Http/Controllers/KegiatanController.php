<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
        $data_kegiatan = \App\Kegiatan::all();
        return view ('admins/data/kegiatan', ['data_kegiatan' => $data_kegiatan]);
    }

    public function create(Request $request)
    {
        $data=$request->all();
        $data['foto_kegiatan'] = $request->file('foto_kegiatan')->store(
            'assets/gallery', 'public'
        );

        $config=[
            'table'=>'kegiatan', 'field'=>'id_kegiatan', 'length'=>7,'prefix'=>'KEG-'
        ];
        $id = IdGenerator::generate($config);


        $data['id_kegiatan']= $id;

        \App\Kegiatan::create($data);
        return redirect ('/admins/data/kegiatan');
    }

    public function edit($id)
    {
        $kegiatan = \App\Kegiatan::find($id);
        return view ('admins/data/editkegiatan',[
            'items'=>$kegiatan
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $kegiatan = \App\Kegiatan::findOrFail($id);

        $kegiatan->update($data);

        return redirect('/admins/data/kegiatan');
    }

    public function hapus($id)
    {
        $kegiatan = \App\Kegiatan::findOrFail($id);

        $kegiatan->delete();

        return redirect('/admins/data/kegiatan');
    }
}
