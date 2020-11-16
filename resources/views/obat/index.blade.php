@extends('layouts.master')
@section('content')
    <div class="container">
        @if (Session::has('pesan'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('pesan')}}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Data Obat
                            <p align="right">
                                <a href="{{route('obat.create')}}" class="btn btn-success pull-right" style="margin-top: -8px">Tambah Data</a>
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
                                @php
                                    $no = $data->firstItem()-1;
                                @endphp
                                @foreach ($data as $obat)
                                @php
                                    $no++;
                                @endphp
                                <tr>
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $no }}</td>
                                    <td>{{ $obat->id }}</td>
                                    <td>{{ $obat->nama }}</td>
                                    <td>{{ number_format($obat->harga,0,',','.')}}</td>
                                    <td>{{ $obat->jenis }}</td>
                                    <td>{{ $obat->tgl_exp->format('d/m/Y') }}</td>
                                    <td>{{ $obat->supplier }}</td>
                                    <td>
                                        <form action="{{route('obat.destroy',$obat->id)}}" method="post">
                                            @csrf
                                            <a href="{{route('obat.edit',$obat->id)}}" class="btn btn-primary">Edit</a>
                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda Yakin Untuk Hapus Data ?')">Hapus</button>
                                        </form>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>Jumlah Obat: {{ $jumlah_obat }}</div>
                        <div>
                        {{$data->links()}}
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
