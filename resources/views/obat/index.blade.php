@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Data Obat
                            <p align="right">
                                <a href="{{route('')}}" class="btn btn-success pull-right" style="margin-top: -8px">Tambah Data</a>
                            </p><br>
                        </h2>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 12%">Kode Obat</th>
                                    <th style="width: 16.66%">Nama Obata</th>
                                    <th style="width: 10%">Harga</th>
                                    <th style="width: 12%">Jenis</th>
                                    <th style="width: 14%">Expired</th>
                                    <th style="width: 14%">Supplier</th>
                                    <th style="width: 23%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataObat as $obat)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $obat->id }}</td>
                                    <td>{{ $obat->nama }}</td>
                                    <td>{{ $obat->harga }}</td>
                                    <td>{{ $obat->jenis }}</td>
                                    <td>{{ $obat->tgl_exp }}</td>
                                    <td>{{ $obat->supplier }}</td>
                                    <td><button type="submit" class="btn btn-succes">Edit</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
