<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use DB;

class ApotekController extends Controller
{


    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_apotek = \App\Apotek::where('nama_apotek', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_apotek = \App\Apotek::all();
        }

        return view('apotek.index', ['data_apotek' => $data_apotek]);
    }

    public function create(Request $request)
    {

        // insert table user
        $user = new \App\User;
        $user->role = 'apotek';
        $user->name = $request->nama_apotek;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();
        // insert table apotek
        $request->request->add(['user_id' => $user->id]);
        $apotek = \App\Apotek::create($request->all());
        return redirect('/apotek')->with('sukses', 'data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $apotek = \App\Apotek::find($id);
        //dd($apotek);
        return view('apotek.edit', ['apotek' => $apotek]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $apotek = \App\Apotek::find($id);
        $apotek->update($request->all());

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $apotek->avatar = $request->file('avatar')->getClientOriginalName();
            $apotek->save();
        }
        return redirect('/apotek')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $apotek = \App\Apotek::find($id);
        $apotek->delete($apotek);
        return redirect('/apotek')->with('sukses', 'Data Berhasil Dihapus');
    }

    public function profile($id)
    {

        $apotek = \App\Apotek::find($id);
        $blu = $apotek->user_id;
        //dd($blu);
        //dd($apotek);
        $data_obat = DB::table('dabat')->where('user_id', '=', $blu)->get();
        //$data_obat = \App\dabat::all();
        return view('apotek.profile', ['apotek' => $apotek, 'data_obat' => $data_obat]);
    }
}
