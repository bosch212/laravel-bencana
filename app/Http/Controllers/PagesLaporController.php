<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Bencana;
use Session;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PagesLaporController extends Controller
{
    //
    public function index(){
        $data_bencana = \App\Bencana::all();
        $data_jenis = Jenis::pluck('nama_bencana','id_jenis_bencana');
        return view('homepages.lapor.create',compact('data_jenis'));
    }


    public function create(Request $request){
        $input = $request->all();
        $input['foto_bencana'] = $request->file('foto_bencana')->store(
            'assets/gallery', 'public'
        );
        $config=[
            'table'=>'bencana', 'field'=>'id_bencana', 'length'=>7,'prefix'=>'BEN-'
        ];
        $id = IdGenerator::generate($config);
        // dd($input);
        $input['id_bencana'] = $id;
        // dd($input);
        Bencana::create($input);
        $request->session()->flash('simpan', 'ok');
        return redirect()->back();
    }
}
