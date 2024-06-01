@extends('layouts.navbar')
@extends('layouts.footer')
@section('login-logout', 'login')
@section('tentang-kami-classes', 'active')
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

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/tentangkami.css') }}" rel="stylesheet">
</head>

<body>
    {{-- Atas --}}
    <div id="banner" class="text-center text-white">
        {{-- <img class="d-block mx-auto mb-4" src="https://i.pinimg.com/236x/bc/99/0f/bc990ff081db370e24c59be8ff8b5fc5.jpg"
            alt="" width="300" height="300">
        </img> --}}
        <h1 class="display-5 fw-bold">Tentang kami</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae quisquam inventore
                minima placeat molestias fugit et labore earum animi veritatis, quibusdam in, ex iusto eaque neque!
                Voluptatibus molestias voluptatum laborum.</p>
        </div>

    </div>
    {{-- dibawah --}}
    <div class="container marketing mt-5">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                        class="text-body-secondary">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                    exciting
                    prose here.</p>
            </div>
            <div class="col-md-5">
                <img src="https://i.pinimg.com/236x/69/21/49/6921493c13943067aff7ab0606880edc.jpg" alt=""
                    width="100%" height="">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span
                        class="text-body-secondary">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea
                    of
                    how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="https://i.pinimg.com/236x/69/21/49/6921493c13943067aff7ab0606880edc.jpg" alt=""
                    width="100%" height="">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                        class="text-body-secondary">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                    really intended to be actually read, simply here to give you a better view of what this would
                    look
                    like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="https://i.pinimg.com/236x/69/21/49/6921493c13943067aff7ab0606880edc.jpg" alt=""
                    width="100%" height="">
            </div>
        </div>

        <hr class="featurette-divider">
</body>

</html>
