<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>@yield('title', 'Laser Cutting Poliban')</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin m-auto" style="padding-top: 120px">
        <div class="form">
            <form>
                {{-- <img class="mb-4" src="{{ asset('img/workshop.jpg') }}" alt="" width="72" height="57"> --}}
                <h1 class="h3 mb-3 fw-normal text-center mb-5">@yield('form-title')</h1>

                @yield('form-content')

                <button class="btn btn-primary w-100 py-2 mt-5" type="submit">@yield('button-label')</button><br>
                <p class="mt-3 text-center">@yield('bottom-text')</p>
            </form>
        </div>
        <p class="mt-3 text-body-secondary text-center">&copy; Laser Cutting Poliban</p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
