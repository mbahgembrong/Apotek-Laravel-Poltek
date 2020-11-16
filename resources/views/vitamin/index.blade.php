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
                        <h2>Data Vitamin
                            <p align="right">
                                <a href="{{route('vitamin.create')}}" class="btn btn-success pull-right" style="margin-top: -8px">Tambah Data</a>
                            </p><br>
                        </h2>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 12%">Kode Vitamin</th>
                                    <th style="width: 16.66%">Nama Vitamin</th>
                                    <th style="width: 10%">Harga</th>
                                    <th style="width: 12%">Jenis</th>
                                    <th style="width: 14%">Fungsi</th>
                                    <th style="width: 8%">Ukuran</th>
                                    <th style="width: 14%">Expired</th>
                                    <th style="width: 14%">Produksi</th>
                                    <th style="width: 14%">Supplier</th>
                                    <th style="width: 30%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = $data->firstItem()-1;
                                @endphp
                                @foreach ($data as $vitamin)
                                @php
                                    $no++;
                                @endphp
                                <tr>
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $no }}</td>
                                    <td>{{ $vitamin->id }}</td>
                                    <td>{{ $vitamin->nama }}</td>
                                    <td>{{ number_format($vitamin->harga,0,',','.')}}</td>
                                    <td>{{ $vitamin->jenis }}</td>
                                    <td>{{ $vitamin->fungsi }}</td>
                                    <td>{{ $vitamin->ukuran }}</td>
                                    <td>{{ $vitamin->tgl_exp->format('d/m/Y') }}</td>
                                    <td>{{ $vitamin->tgl_prod->format('d/m/Y') }}</td>
                                    <td>{{ $vitamin->supplier }}</td>
                                    <td>
                                        <form action="{{route('vitamin.destroy',$vitamin->id)}}" method="post">
                                            @csrf
                                            <a href="{{route('vitamin.edit',$vitamin->id)}}" class="btn btn-warning" style="margin-bottom:5px">Edit</a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda Yakin Untuk Hapus Data ?')">Hapus</button>
                                        </form>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>Jumlah Vitamin: {{ $jumlah_vitamin }}</div>
                        <div>
                        {{$data->links()}}
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
