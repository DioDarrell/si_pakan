<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requestlist;
use PDF;

class DataRequestController extends Controller
{
    public function reqList()
    {
        $requestlist = Requestlist::all();
        return view('reqList', compact(['requestlist']));
        // mengambil data dari table pegawai
        // $products = DB::table('products')->get();

        // mengirim data pegawai ke view index
        // return view('index', ['products' => $products]);
    }

    public function cetak_pdf()
    {
        $requestlists = Requestlist::all();

        $pdf = PDF::loadview('request_pdf', ['requestlists' => $requestlists]);
        return $pdf->stream();
    }
}
