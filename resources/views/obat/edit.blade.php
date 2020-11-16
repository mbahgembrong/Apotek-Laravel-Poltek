@extends('layouts.master')

@section('content')
<div class="container">
    <h4>Edit Data</h4>
    <form action="{{ route('obat.update',$obat->id)}}" method="post">
    @csrf
    <div class="form-group row">
        <label for="kode" class="col-sm-2 col-form-label">Kode Obat</label>
        <div class="col-sm-10"><input type="text" name="kode" id="kode" value="{{$obat->id}}" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Obat</label>
        <div class="col-sm-10"><input type="text" name="nama" id="nama"  value="{{$obat->nama}}" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10"><input type="text" name="harga" id="harga"  value="{{$obat->harga}}" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
        <div class="col-sm-10">
            <select class="col-sm-2 form-control" name="jenis" id="jenis">
                <option selected value="{{$obat->jenis}}">{{$obat->jenis}}</option>
                <option value="Bedak">Bedak</option>
                <option value="Cair">Cair</option>
                <option value="Tablet">Tablet</option>
                <option value="Koyo">Koyo</option>
                <option value="Lotion">Lotion</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_exp" class="col-sm-2 col-form-label">Expired</label>
        <div class="col-sm-10"><input type="text" name="tgl_exp" id="tgl_exp" value="{{$obat->tgl_exp}}" class="form-control"></div>
    </div>
    <div class="form-group row">
        <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
        <div class="col-sm-10"><input type="text" name="supplier" id="supplier" value="{{$obat->supplier}}" class="form-control"></div>
    </div>
    <div><button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{route('obat.index')}}" class="btn btn-warning" >Cancel</a>
    </div>
    </form>
</div>
@endsection

