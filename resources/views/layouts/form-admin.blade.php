<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laser Cuttin Poliban</title>

    <link rel="stylesheet" href="{{ asset('css/admin/form-admin.css') }}">
</head>

<body>
    <main class="form-signin m-auto" style= "padding-top: 120px">
        <div class="form">
            <form>
                <h1 class="h3 mb-5 fw-normal text-center">@yield('title')</h1>

                @yield('form-content')

                <div class="d-flex justify-content-between mt-5">
                    <button type="button" class="btn btn-secondary">Kembali</button>
                    <button type="button" class="btn btn-info">@yield('right-button')</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
