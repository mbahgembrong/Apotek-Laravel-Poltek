<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    //untuk menampilkan data obat all
    public function index()
    {
        $batas=5;
        $jumlah_obat = Obat::count();
        // $data = Obat::all();
        $data = Obat::orderBy('id','desc')->paginate($batas);
        $no=$batas*($data->currentPage()-1);
        // return view('obat.index', ['data' => $data]);
        // return view('obat.index', compact('data','no','jumlah_obat'));
        return view('obat.index', ['data' =>$data,'no'=>$no,'jumlah_obat'=>$jumlah_obat]);
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
        return redirect('/obat')->with('pesan','Data berhasil disimpan');
    }
    // untuk menampilkan data yang akan diedit berdasarkan id
    public function edit($id)
    {
        $obat = Obat::find($id);
        // setelah proses selesai, akan dikembalikan ke halaman index obat
        return view('obat.edit', compact('obat'));
    }
    // menyimpan data yang diubah
    public function update(Request $request, $id)
    {
        $obat= Obat::find($id);
        $obat->id =$request->kode;
        $obat->nama =$request->nama;
        $obat->harga =$request->harga;
        $obat->jenis =$request->jenis;
        $obat->tgl_exp =$request->tgl_exp;
        $obat->supplier =$request->supplier;
        $obat->update();
        // setelah proses selesai akan dikembalikan ke halaman index obat
        return redirect('/obat')->with('pesan','Data berhasil diupdate');
    }

    // menghapus data
    public function destroy($id)
    {
        $obat = Obat::find($id);
        // Untuk mnjalankan perintah delete
        $obat->delete();
        // setelah proses selesai,akan dikembalikan ke halamn index
        return redirect('/obat')->with('pesan','Data berhasil dihapus');
    }
}
