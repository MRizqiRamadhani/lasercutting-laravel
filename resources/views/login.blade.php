@extends('layouts.auth')
@extends('layouts.navbar')
@section('login-classes', 'active')
@section('title', 'Login - Laser Cutting Poliban')
@section('form-title', 'LOGIN')
@section('button-label', 'Login')

@section('bottom-text')
    Belum punya akun? <a href="{{ route('register') }}">Buat akun</a>
@endsection

@section('form-content')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
@endsection
