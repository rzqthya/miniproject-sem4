<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/gambar1.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1>Selamat datang!</h1>
                                    <h4 class="fs-5 mt-4"> klik untuk masuk ke halaman master barang</h4>
                                </div>
                                <div class="col-md-8 offset-md-2 mt-4">
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-dark" href="{{url('/home')}}">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
