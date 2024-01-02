<?php

namespace App\Http\Controllers;

use App\Models\Ketagori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Ketagori::get();
        
        return view('kategori/index', ['kategori'=>$kategori]);
    }

    public function tambah()
    {
        return view('kategori.form');
    }

    public function simpan(Request $request)
    {
        Ketagori::create(['nama'=>$request->nama]);

        return redirect()->route('kategori');
    }

    public function edit($id)
    {
        $kategori = Ketagori::find($id)->first();

        return view('kategori.form', ['kategori'=>$kategori]);
    }

    public function update($id, Request $request)
    {
        Ketagori::find($id)->update(['nama'=>$request->nama]);

        return redirect()->route('kategori');
    }
}
