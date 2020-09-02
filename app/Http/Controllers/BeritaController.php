<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BeritaController extends Controller
{
    public function berita()
    {
        $data_berita = \App\Berita::all();
        return view ('admins/data/berita', ['data_berita' => $data_berita]);
    }

    public function create(Request $request)
    {
        $data=$request->all();
        $data['foto_berita'] = $request->file('foto_berita')->store(
            'assets/gallery', 'public'
        );

        $config=[
            'table'=>'berita', 'field'=>'id_berita', 'length'=>7,'prefix'=>'BER-'
        ];
        $id = IdGenerator::generate($config);


        $data['id_berita']= $id;

        \App\Berita::create($data);
        return redirect ('/admins/data/berita');
    }

    public function edit($id)
    {
        $berita = \App\Berita::find($id);
        return view ('admins/data/editberita',[
            'items'=>$berita
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $berita = \App\Berita::findOrFail($id);

        $berita->update($data);

        return redirect('/admins/data/berita');
    }

    public function hapus($id)
    {
        $berita = \App\Berita::findOrFail($id);

        $berita->delete();

        return redirect('/admins/data/berita');
    }

}
