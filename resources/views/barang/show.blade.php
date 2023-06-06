@extends('layout.app')
@section('content')
    <div class="container-fluid px-4">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header d-flex">
                <h6 class="font-weight-bold fs-4 mt-2 text-black col-lg-10 col-sm-6">Detail Barang</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row m-3">
                        <div class="col-md-12">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <h5>{{ $barang->kode_barang }}</h5>
                        </div>
                        <div class="col-md-12">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <h5>{{ $barang->nama_barang }}</h5>
                        </div>
                        <div class="col-md-12">
                            <label for="e" class="form-label">Harga Barang</label>
                            <h5>{{ $barang->harga_barang }}</h5>
                        </div>
                        <div class="col-md-12">
                            <label for="age" class="form-label">Deskripsi Barang</label>
                            <h5>{{ $barang->deskripsi_barang }}</h5>
                        </div>
                        <div class="col-md-12">
                            <label for="age" class="form-label">Satuan</label>
                            <h5>{{ $barang->satuan->nama_satuan }}</h5>
                        </div>
                    </div>
                    <div class="row m-3 col-md-4">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
