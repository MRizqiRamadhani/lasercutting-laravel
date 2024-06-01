@extends('layouts.navbar')
@extends('layouts.footer')
@section('login-logout', 'Admin')


<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laser Cutting Poliban</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/beranda.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/beranda.css') }}" rel="stylesheet">
</head>

<body class="mt-5">

    <div class="container">
        <div class="container mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <button type="button" class="btn btn-success btn-md"><span
                            class="bi bi-plus-circle-fill"></span>&nbsp;Tambah
                        Pesanan</button>

                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-md"><span
                            class="bi bi-plus-circle-fill"></span>&nbsp;Tambah Barang</button>
                </div>
            </div>

            <div class="container marketing mt-5">
                <div id="articles-container" class="row">
                    <div class="row">
                        <h1 class="text-center mb-5">Selamat Datang admin imuets</h1>
                        <div class="col-lg-4">

                            <div class="card-img">
                                <button type="button" class="btn btn-success btn-md">
                                    <span class="bi bi-pen"></span>
                                </button>
                                <button type="button" class="btn btn-danger btn-md">
                                    <span class="bi bi-trash"></span>
                                </button>
                            </div>
                            <h2 class="fw-normal mt-3">RAMBUT ZEUS</h2>
                            <p>Some representative placeholder content for the three columns of text below the carousel.
                                This is
                                the first column.</p>
                            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>

                        </div>
                        <div class="col-lg-4">

                            <div class="card-img">
                                <button type="button" class="btn btn-success btn-md">
                                    <span class="bi bi-pen"></span>
                                </button>
                                <button type="button" class="btn btn-danger btn-md">
                                    <span class="bi bi-trash"></span>
                                </button>
                            </div>
                            <h2 class="fw-normal mt-3">RAMBUT ZEUS</h2>
                            <p>Some representative placeholder content for the three columns of text below the carousel.
                                This is
                                the first column.</p>
                            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>

                        </div>
                        <div class="col-lg-4">

                            <div class="card-img">
                                <button type="button" class="btn btn-success btn-md">
                                    <span class="bi bi-pen"></span>
                                </button>
                                <button type="button" class="btn btn-danger btn-md">
                                    <span class="bi bi-trash"></span>
                                </button>
                            </div>
                            <h2 class="fw-normal mt-3">RAMBUT ZEUS</h2>
                            <p>Some representative placeholder content for the three columns of text below the carousel.
                                This is
                                the first column.</p>
                            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>

                        </div>
                    </div>
                </div>
            </div>
</body>
<hr>

</html>
