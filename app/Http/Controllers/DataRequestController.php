<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRequestController extends Controller
{
    public function reqList()
    {
        return view('reqList');
        // mengambil data dari table pegawai
        //$barang = DB::table('barang')->get();

        // mengirim data pegawai ke view index
        //return view('index', ['barang' => $barang]);
    }
}
