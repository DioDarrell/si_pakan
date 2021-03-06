<?php

namespace App\Http\Controllers;


use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF as PDF;

class DataBarangController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view ('index',compact(['products']));
        // mengambil data dari table pegawai
       // $products = DB::table('products')->get();

        // mengirim data pegawai ke view index
       // return view('index', ['products' => $products]);
    }
    

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        Product::create($request->all());
        // insert data ke table pegawai
        // DB::table('barang')->insert([
        //     'nama' => $request->nama,
        //     'jumlah' => $request->jumlah,
        //     'harga' => $request->harga
        // ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        //return view('edit');
       $product = Product::find($id);
       return view('edit', compact(['product']));
        // mengambil data pegawai berdasarkan id yang dipilih
       // $barang = DB::table('products')->where('id_barang', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
       // return view('edit', ['barang' => $barang]);
    }

    // update data pegawai
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $product->update($request->all());
        return redirect('/');
        // update data pegawai
        // DB::table('barang')->where('id_barang', $request->id)->update([
        //     'nama' => $request->nama,
        //     'jumlah' => $request->jumlah,
        //     'harga' => $request->harga
        // ]);
        // alihkan halaman ke halaman pegawai
       // return redirect('/barang');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        $product = Product::find($id);
        $product->delete();
        // menghapus data pegawai berdasarkan id yang dipilih
        //DB::table('barang')->where('id_barang', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }

    public function cetak_pdf()
    {
        $products = Product::all();

        $pdf = PDF::loadview('product_pdf', ['products' => $products]);
        return $pdf->stream();
    }
}
