<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\dabat;
use App\Imports\ApotekImport;

class ObatController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        //dd($id);
        //$data_user = DB::table('RAB')->where('rab', '>', '0')->where('target', '>', '0')->where('aksi', '=', 'belum')->get();

        $data_obat = DB::table('dabat')->where('user_id', '=', $id)->get();

        //$data_obat = \App\dabat::all();
        return view('obat.indexobat', ['data_obat' => $data_obat]);
    }

    public function create(Request $request)
    {
        // insert table user

        /*  $user = new \App\User;
        $user->role = 'apotek';
        $user->name = $request->nama_apotek;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();*/


        // insert table apotek

        //$user = new \App\User;
        //dd($apotek);
        //$data_user = DB::table('RAB')->where('rab', '>', '0')->where('target', '>', '0')->where('aksi', '=', 'belum')->get();
        $obat = \App\dabat::create($request->all());

        return redirect('/obat')->with('sukses', 'data berhasil ditambahkan');
    }

    public function importexcel(Request $request)
    {
        Excel::import(new ApotekImport, $request->file('data_obat'));
        return redirect('/obat');
    }

    public function dabat(dabat $dabat)
    {
        $dabats = $dabat->all();
        return response()->json($dabats);
    }
}
