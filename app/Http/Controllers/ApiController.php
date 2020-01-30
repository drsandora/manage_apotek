<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_apotek = DB::table('dabat')
            ->join('apotek', 'dabat.user_id', '=', 'apotek.user_id')
            ->select('dabat.*','apotek.nama_apotek','apotek.longitude_apotek','apotek.latitude_apotek','apotek.link_apotek','apotek.alamat_apotek','apotek.avatar')
            ->where('dabat.nama', 'LIKE', '%' . $request->cari . '%')
            ->get();
        } else {
      
        }

        // return response()->json($data_apotek);
        
        return response()->json($data_apotek);
    }   

    public function data_obat()
    {
        $data_obat = DB::table('dabat')->where('user_id', '=', 25 )->orderBy('nama')->get();
        return $data_obat;
    
    }
}
