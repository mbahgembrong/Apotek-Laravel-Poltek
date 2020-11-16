<?php

namespace App\Http\Controllers;

use App\Vitamin;
use Illuminate\Http\Request;

class VitaminController extends Controller
{
    public function index()
    {
        $batas=5;
        $jumlah_vitamin = Vitamin::count();
        // $data = Vitamin::all();
        $data = Vitamin::orderBy('id','desc')->Paginate(5);
        $no=$batas*($data->currentPage()-1);
        // return view('Vitamin.index', ['data' => $data]);
        return view('vitamin.index', compact('data','no','jumlah_vitamin'));
    }

    // untuk membuat data baru
    public function create()
    {
        return view('vitamin.create');
    }

    // menyimpan data baru
    public function store(Request $request)
    {
        $vitamin=new Vitamin;
        $vitamin->id =$request->kode;
        $vitamin->nama =$request->nama;
        $vitamin->harga =$request->harga;
        $vitamin->jenis =$request->jenis;
        $vitamin->fungsi=$request->fungsi;
        $vitamin->ukuran=$request->ukuran;
        $vitamin->tgl_exp =$request->tgl_exp;
        $vitamin->tgl_prod =$request->tgl_prod;
        $vitamin->supplier =$request->supplier;
        $vitamin -> save();
        // setelah proses selesai akan dikembalikan ke halaman index Vitamin
        return redirect('/vitamin')->with('pesan','Data berhasil disimpan');
    }
    // untuk menampilkan data yang akan diedit berdasarkan id
    public function edit($id)
    {
        $vitamin = Vitamin::find($id);
        // setelah proses selesai, akan dikembalikan ke halaman index Vitamin
        return view('vitamin.edit', compact('vitamin'));
    }
    // menyimpan data yang diubah
    public function update(Request $request, $id)
    {
        $vitamin= Vitamin::find($id);
        $vitamin->id =$request->kode;
        $vitamin->nama =$request->nama;
        $vitamin->harga =$request->harga;
        $vitamin->jenis =$request->jenis;
        $vitamin->fungsi=$request->fungsi;
        $vitamin->ukuran=$request->ukuran;
        $vitamin->tgl_exp =$request->tgl_exp;
        $vitamin->tgl_prod =$request->tgl_prod;
        $vitamin->supplier =$request->supplier;
        $vitamin->update();
        // setelah proses selesai akan dikembalikan ke halaman index Vitamin
        return redirect('/vitamin')->with('pesan','Data berhasil diupdate');
    }

    // menghapus data
    public function destroy($id)
    {
        $vitamin = Vitamin::find($id);
        // Untuk mnjalankan perintah delete
        $vitamin->delete();
        // setelah proses selesai,akan dikembalikan ke halamn index
        return redirect('/vitamin')->with('pesan','Data berhasil dihapus');
    }
}
