<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ketagori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barang = Barang::get();
        return view('barang.index', ['barang' => $barang]);
    }

    public function tambah() {
        $kategori = Ketagori::get();

        return view('barang.form', ['kategori'=>$kategori]);
    }

    public function simpan(Request $request) {
        $data = [
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        Barang::create($data);

        return redirect()->route('barang');
    }   

    public function edit($id) {
        $barang = Barang::where('id', $id)->first();
        $kategori = Ketagori::get();

        return view('barang.form', ['barang' => $barang, 'kategori' => $kategori]);
    }

    public function update($id, Request $request) {
        $data = [
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        Barang::find($id)->update($data);

        return redirect()->route('barang');
    }
}
