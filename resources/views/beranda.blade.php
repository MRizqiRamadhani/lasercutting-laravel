@extends('layouts.navbar')
@extends('layouts.footer')
@section('beranda-classes', 'active')
@section('login-logout', 'Login')

<!doctype html>
<html lang="en" data-bs-theme="auto">

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
</head>

<body>
    <main>

        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/img/img_beranda.jpg') }}" alt="" width="100%"
                        style="filter: brightness(35%)">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Laser Cutting Poliban</h1>
                            <p class="opacity-100">Laser Cutting poliban adalah sebuah layanan pembuat cutting plat baja
                                yang dapat di custom dari gambar yang di desain sendiri menggunakan komputer, customer
                                dapat memilih dan dapat m</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Hire Us!</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/236x/a1/3f/7a/a13f7a5fa480580ff92490c56eac05c5.jpg" alt=""
                        width="500%" style="filter: brightness(35%)">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Laser Cutting Poliban</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolorum molestias
                                pariatur delectus eaque culpa, qui accusamus est atque voluptate illum nesciunt quidem
                                quasi quae accusantium soluta cupiditate repellat iusto.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="text-center pb-5 mb-5 mt-5" style="font-size: 40px">Barang yang tersedia!</div>
                <div class="col-lg-4">
                    {{-- <svg class="bd-placeholder-img mb-3" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg> --}}
                    <img src="https://i.pinimg.com/474x/37/ba/54/37ba5432743a2832908c25555867a53f.jpg" alt=""
                        width="220px">
                    <h2 class="fw-normal mt-3">RAMBUT ZEUS</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is
                        the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    {{-- <svg class="bd-placeholder-img mb-3" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg> --}}
                    <img src="https://i.pinimg.com/236x/6b/db/0f/6bdb0fb41eec96a3fa7368a7a68f956d.jpg" alt=""
                        width="190px">
                    <h2 class="fw-normal mt-3">AGUNG MINECRAFT</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                        second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    {{-- <svg class="bd-placeholder-img mb-3" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg> --}}
                    <img src="https://i.pinimg.com/474x/c5/06/39/c50639ddba1402f8d47f4b48a312bcab.jpg" alt=""
                        width="220px">
                    <h2 class="fw-normal mt-3">KUCING LMAO</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            {{-- WHY CHOOSE US --}}
            <hr class="featurette-divider" style="margin-bottom: -50px">
            <div class="container" style=" width: 900px;">

                <h3 class="featurette-heading fw-normal text-center ">Kenapa memilih kami?</h3>
                <div class="row justify-content-evenly mt-5 mb-5">

                    <div class="col-6 card text-center mb-4" style="width: 400px; height:250px ">
                        <div class="card-body">
                            <h5 class="card-title mt-3 mb-4" style="font-size: 30px">Tim Hebat</h5>
                            <img src="img/group.png" alt="Team Icon" style="width: 75px; height: 75px; object-fit:">
                            <p class="card-text mt-3">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                        </div>
                    </div>


                    <div class="col-6 card text-center mb-4" style="width: 400px; height:250px">
                        <div class="card-body">
                            <h5 class="card-title mt-3 mb-4" style="font-size: 30px">Harga Terjangkau</h5>
                            <img src="img/price.png" alt="Team Icon" style="width: 75px; height: 75px; object-fit:">
                            <p class="card-text mt-3">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 card text-center mb-4" style="width: 400px; height:250px">
                        <div class="card-body">
                            <h5 class="card-title mt-3 mb-4" style="font-size: 30px">Tepat Waktu</h5>
                            <img src="img/time.png" alt="Team Icon" style="width: 75px; height: 75px; object-fit:">
                            <p class="card-text mt-3">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 card text-center mb-4" style="width: 400px; height:250px">
                        <div class="card-body">
                            <h5 class="card-title mt-3 mb-4" style="font-size: 30px">Kualitas Terbaik</h5>
                            <img src="img/quality.png" alt="Team Icon"
                                style="width: 75px; height: 75px; object-fit:">
                            <p class="card-text mt-3">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>





    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
