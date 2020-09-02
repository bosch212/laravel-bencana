<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

class PetugasController extends Controller
{
       public function petugas()
       {
           $data_admin = \App\Admin::all();
           return view ('admins/master/petugas', ['data_admin' => $data_admin]);
       }

       public function create(Request $request)
       {
           $user = new \App\User;
           $user->role = 'Petugas';
           $user->name = $request->nama;
           $user->email = $request->email;
           $user->password = bcrypt($request->kata_sandi);
           $user->remember_token = Str::random(60);
           $user->save();

           $request->request->add(['admin_id' => $user->id]);
           $admin = \App\Admin::create($request->all());
           return redirect('admins/master/petugas');
    }

    public function edit($id)
    {
        $admin = \App\Admin::find($id);
        return view ('admins/master/editpetugas',[
            'items'=>$admin
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $admin = \App\Admin::findOrFail($id);

        $admin->update($data);

        return redirect('/admins/master/petugas');
    }

    public function hapus($id)
    {
        $admin = \App\Admin::findOrFail($id);

        $admin->delete();

        return redirect('/admins/master/petugas');
    }
}
