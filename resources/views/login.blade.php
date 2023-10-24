@extends('layout')
@section('title', 'Login')
@section('content')
<div class="wrapper">
    <form action="{{route('login.post')}}" method="POST">
        @csrf
        <h1>Login</h1>
        <div class="input-style">
            <input type="email" placeholder="Email" name="email" required>
            <i class="fa-regular fa-user"></i>
        </div>
        <div class="input-style">
            <input type="password" placeholder="Password" name="password" required>
            <i class="fa-solid fa-lock"></i>
        </div>

        <button type="login" class="btn-login" >Login</button>

        <div class="register-link">
            <p>Register Here! <a href="#">Register</a></p>
        </div>
    </form>
</div>

@endsection
