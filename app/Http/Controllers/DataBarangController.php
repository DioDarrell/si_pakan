<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBarangController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $barang = DB::table('barang')->get();

        // mengirim data pegawai ke view index
        return view('index', ['barang' => $barang]);
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
        // insert data ke table pegawai
        DB::table('barang')->insert([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/barang');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $barang = DB::table('barang')->where('id_barang', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['barang' => $barang]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('barang')->where('id_barang', $request->id)->update([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/barang');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('barang')->where('id_barang', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/barang');
    }
}
