@extends('layouts.navbar')
@section('login-logout', 'Login')
@section('kontak-classes', 'active')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laser Cutting Poliban</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
</head>

<body>
    <div class="container centered-form mt-5">
        <div class="card">
            <img src="img/Logo.png" class="card-img-top mt-5" alt="Laser Cutting Poliban">
            <div class="card-header">
                Laser Cutting Poliban
            </div>
            <div class="card-body ps-5">
                <form>
                    <div class="form-group">
                        <label class="mb-3" style="font-weight: bold">Whatsapp</label>
                        <p>+62 811-1921-2358</p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label class="mb-3" style="font-weight: bold">Email</label>
                        <p>LasercuttingPoliban@gmail.com</p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label class="mb-3" style="font-weight: bold">Address</label>
                        <p>Jl. Brig Jend. Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan
                            Selatan 70124</p>
                        <hr>
                    </div>
                </form>
                <div class="d-flex justify-content-start">
                    <a href="#">
                        <div
                            style="background-repeat: no-repeat; background-size: 100% 100%; background-image: url({{ asset('/img/instagram.png') }}); width: 50px; height: 50px;">
                        </div>
                    </a>
                    <div style="width: 10px"></div>
                    <a href="#">
                        <div
                            style="background-repeat: no-repeat; background-size: 100% 100%; background-image: url({{ asset('/img/facebook.png') }}); width: 50px; height: 50px;">
                        </div>
                    </a>
                </div>
                {{-- <img class="d-block" src="img/instagram.png" alt="instagram" style="width: 50px; height: 50px;">
                <img class="d-block" src="img/facebook.png" alt="facebook" style="width: 50px; height: 50px;"> --}}
            </div>
        </div>
    </div>
</body>

</html>
