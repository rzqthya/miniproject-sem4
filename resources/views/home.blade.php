<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- Side-Nav -->
    @extends('layout.app')
    @section('content')
    <div class="container-fluid px-4">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header d-flex">
                <h6 class="font-weight-bold fs-4 mt-2 text-black col-lg-10 col-sm-6">Biodata</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive row">
                    <div class="col-md-3">
                        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/biodata.jpeg') }}" alt="image">
                    </div>
                    <div class="col-md-9">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>Rizqy Athiyya Nafi'atus Sa'idah</td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td>1204210053</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>athiyya8@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Prodi</td>
                                <td>:</td>
                                <td>Sistem Informasi</td>
                            </tr>
                        </table>
                        <div>
                            <h4 class="fs-5 mt-4">More information</h4>
                            <i class="bi bi-instagram mx-2"></i>
                            <i class="bi bi-whatsapp"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @vite('resources/js/app.js')
</body>
</html>
