@extends('layout.app')
@section('content')
    <div class="container-fluid px-4">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header d-flex">
                <h6 class="font-weight-bold fs-4 mt-2 text-black col-lg-10 col-sm-6">{{$pageTitle}}</h6>
                <a href="{{route('barangs.create')}}" class=" col-lg-2 mt-2 col-sm-6">
                    <span class="btn btn-primary">Tambah Data</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Satuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $barang->kode_barang}}</td>
                                    <td>{{ $barang->nama_barang}}</td>
                                    <td>Rp. {{ $barang->harga_barang}}</td>
                                    <td>{{ $barang->deskripsi_barang}}</td>
                                    <td>{{ $barang->satuan->nama_satuan}}</td>
                                    <td>@include('barang.actions')</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

