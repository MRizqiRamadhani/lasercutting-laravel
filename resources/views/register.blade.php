@extends('layouts.auth')
@extends('layouts.navbar')
@section('title', 'Register - Laser Cutting Poliban')
@section('form-title', 'REGISTER')
@section('button-label', 'Register')
@section('login-logout', 'Login')

@section('bottom-text')
    Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
@endsection

@section('form-content')
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">No Telepon</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp"></div>
    </div>
    {{-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div> --}}
@endsection
