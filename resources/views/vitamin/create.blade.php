@extends('layouts.master')

@section('content')
<div class="container">
    <h4>Tambah Data</h4>
    <form action="{{ route('vitamin.store')}}" method="post">
    @csrf
    <div class="form-group row">
        <label for="kode" class="col-sm-2 col-form-label">Kode Vitamin</label>
        <div class="col-sm-10"><input type="text" name="kode" id="kode" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Vitamin</label>
        <div class="col-sm-10"><input type="text" name="nama" id="nama" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10"><input type="text" name="harga" id="harga" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
        <div class="col-sm-10">
            <select class="col-sm-2 form-control" name="jenis" id="jenis">
                <option selected disabled value>Pilih</option>
                <option value="Vitamin A">Vitamin A</option>
                <option value="Vitamin C">Vitamin C</option>
                <option value="Vitamin D">Vitamin D</option>
                <option value="Vitamin E">Vitamin E</option>
                <option value="Vitamin K">Vitamin K</option>
                <option value="Vitamin B">Vitamin B</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fungsi" class="col-sm-2 col-form-label">Fungsi</label>
        <div class="col-sm-10"><input type="text" name="fungsi" id="fungsi" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
        <div class="col-sm-10">
            <select class="col-sm-2 form-control" name="ukuran" id="ukuran">
                <option selected disabled value>Pilih</option>
                <option value="Kapsul">Kapsul</option>
                <option value="Tablet">Tablet</option>
                <option value="Cair">Cair</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_exp" class="col-sm-2 col-form-label">Expired</label>
        <div class="col-sm-10"><input type="text" name="tgl_exp" id="tgl_exp" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="tgl_prod" class="col-sm-2 col-form-label">Produksi</label>
        <div class="col-sm-10"><input type="text" name="tgl_prod" id="tgl_prod" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
        <div class="col-sm-10"><input type="text" name="supplier" id="supplier" class="form-control"></div>
    </div>
    <div><button type="submit" class="btn btn-primary">Simpan</button></div>
    </form>
</div>
@endsection

