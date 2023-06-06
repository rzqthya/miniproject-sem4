@extends('layout.app')
@section('content')
    <div class="container-fluid px-4">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header d-flex">
                <h6 class="font-weight-bold fs-4 mt-2 text-black col-lg-10 col-sm-6">{{$pageTitle}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable"  cellspacing="0">
                        <form action="{{ route('barangs.update', ['barang' => $barang->id])}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row m-3">
                                <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang" value="{{ $errors->any() ? old('kode_barang') : $barang->kode_barang }}" placeholder="Masukkan Kode">
                                    @error('kode_barang')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('namaBarang') is-invalid @enderror" id="namaBarang" name="namaBarang" value="{{ $errors->any() ? old('namaBarang') : $barang->nama_barang }}" placeholder="Masukkan Nama Barang">
                                    @error('namaBarang')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $errors->any() ? old('harga') : $barang->harga_barang }}" placeholder="Masukkan Harga">
                                    @error('harga')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="deskripsi" name="deskripsi" value="{{ $errors->any() ? old('deskripsi') : $barang->deskripsi_barang }}" placeholder="Masukkan Deskripsi Barang">
                                    @error('deskripsi')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <select name="satuan" id="satuan" class="form-select">
                                        @php
                                        $selected = "";
                                            if ($errors->any())
                                                $selected = old('satuan');
                                            else
                                                $selected = $barang->satuan_id;
                                        @endphp
                                        @foreach ($satuans as $satuan)
                                            <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>{{ $satuan->nama_satuan }}</option>
                                        @endforeach
                                    </select>
                                    @error('satuan')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3 pt-4 col-md-4">
                                <div class="col-md-6 d-grid">
                                    <a href="{{ route('barangs.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                                <div class="col-md-6 d-grid">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

