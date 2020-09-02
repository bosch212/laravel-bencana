<?php

namespace App\Http\Controllers;
use App\Detail_Korban;
use PDF;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class KorbanController extends Controller
{
    public function korban()
    {
        $data_korban = \App\Korban::with('jenis_bencana')->get();
        $jenis_bencana = \App\Jenis::all();
        return view ('admins/data/korban',['data_korban' => $data_korban,
        'jenis_bencana'=> $jenis_bencana]);

    }

    public function create(Request $request)
    {
        $config=[
            'table'=>'korban', 'field'=>'id_korban', 'length'=>7,'prefix'=>'KOR-'
        ];
        $id = IdGenerator::generate($config);


        $data = $request->all();
        $data['id_korban']= $id;

        \App\Korban::create($data);
        return redirect('/admins/data/korban');
    }

    public function edit($id)
    {
        $korban = \App\Korban::find($id);
        $bencana = \App\Jenis::all();
        return view ('admins/data/edit',[
            'items'=> $korban,
            'bencana' => $bencana
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $korban = \App\Korban::findOrFail($id);

        $korban->update($data);

        return redirect('/admins/data/korban');
    }

    public function hapus($id)
    {

        $korban = \App\Korban::findOrFail($id);

        $korban->delete();

        return redirect('/admins/data/korban');
    }

    public function exportPdf()
    {
         $korban = \App\Korban::all();
         $pdf = PDF::loadview('export.exportkorban', ['korban' => $korban]);
         return $pdf->download('korban.pdf');
    }

    public function detail($id)
    {
        $id=$id;
        return view ('admins.data.detail_korban', compact('id'));
    }

    public function store(Request $request,$id)
    {
        $config=[
            'table'=>'detail_korban', 'field'=>'id_detail_korban', 'length'=>7,'prefix'=>'DTL-'
        ];
        $id_detail_korban = IdGenerator::generate($config);

        $jumlah = \App\Korban::findOrFail($id);

        if($request->jenis_korban == 'meninggal'){
            $data = $request->all();
            $data['id_detail_korban'] = $id_detail_korban;
            $data['id_korban']= $id;
            $jumlah['meninggal'] +=1;
            $jumlah->save();

            \App\Detail_Korban::create($data);
            return redirect('/admins/data/korban');
        }
       else if($request->jenis_korban == 'luka_luka'){
            $data = $request->all();
            $data['id_detail_korban'] = $id_detail_korban;
            $data['id_korban']= $id;
            $jumlah['luka_luka'] +=1;
            $jumlah->save();

            \App\Detail_Korban::create($data);
            return redirect('/admins/data/korban');
        }

        else if($request->jenis_korban == 'kehilangan'){
            $data = $request->all();
            $data['id_detail_korban'] = $id_detail_korban;
            $data['id_korban']= $id;
            $jumlah['kehilangan'] +=1;
            $jumlah->save();

            \App\Detail_Korban::create($data);
            return redirect('/admins/data/korban');
        }
    }

    public function view_detail($id)
    {
        $detail_korban = \App\Detail_Korban::where('id_korban', $id)->where('jenis_korban','meninggal')->get();

            return view ('/admins/data/view_detail_korban',compact('detail_korban'));
    }

    public function view_detail_luka($id)
    {
        $detail_korban = \App\Detail_Korban::where('id_korban', $id)->where('jenis_korban','luka_luka')->get();


        return view ('/admins/data/view_detail_korban_luka',compact('detail_korban'));
    }

    public function view_detail_kehilangan($id)
    {
        $detail_korban = \App\Detail_Korban::where('id_korban', $id)->where('jenis_korban','kehilangan')->get();


        return view ('/admins/data/view_detail_korban_kehilangan',compact('detail_korban'));
    }

    public function exportPdf_meninggal($id)
    {
         $detail_korban = \App\Detail_Korban::where('jenis_korban','meninggal')->where('id_korban',$id)->get();
         $pdf = PDF::loadview('export.exportmeninggal', ['detail_korban' => $detail_korban]);
         return $pdf->download('korban_detail_meninggal.pdf');
    }

    public function exportPdf_luka($id)
    {
         $detail_korban = \App\Detail_Korban::where('jenis_korban','luka_luka')->where('id_korban',$id)->get();
         $pdf = PDF::loadview('export.exportluka', ['korban' => $detail_korban]);
         return $pdf->download('korban_detail_luka.pdf');
    }

    public function exportPdf_hilang($id)
    {
        $detail_korban = \App\Detail_Korban::where('jenis_korban','kehilangan')->where('id_korban',$id)->get();
         $pdf = PDF::loadview('export.exporthilang', ['detail_korban' => $detail_korban]);
         return $pdf->download('korban_detail_hilang.pdf');
    }
}

