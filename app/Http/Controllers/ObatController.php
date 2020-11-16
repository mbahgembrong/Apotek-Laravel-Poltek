<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    //untuk menampilkan data obat all
    public function index()
    {
        $data = Obat::all();
        return view('obat.index', ['dataObat' => $data]);
    }

    // untuk membuat data baru
    public function create()
    {
        return view('obat.create');
    }

    // menyimpan data baru
    public function store(Request $request)
    {
        $obat=new Obat;
        $obat->id =$request->kode;
        $obat->nama =$request->nama;
        $obat->harga =$request->harga;
        $obat->jenis =$request->jenis;
        $obat->tgl_exp =$request->tgl_exp;
        $obat->supplier =$request->supplier;
        $obat -> save();
        // setelah proses selesai akan dikembalikan ke halaman index obat
        return redirect('/obat');
    }
    // untuk menampilkan data yang akan diedit berdasarkan id
    public function edit($id)
    {
        $obat = Obat::find($id);
        // setelah proses selesai, akan dikembalikan ke halaman index obat
        return view('obat.edit', compact('obat'));
    }
}
