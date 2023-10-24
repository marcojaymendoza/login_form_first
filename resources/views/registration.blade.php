@extends('layout')
@section('title', 'Registration')
@section('content')
<div class="wrapper">
    <form action="{{route('registration.post')}}" method="POST">
        @csrf
        <h1>Registration</h1>
        <div class="input-style">
            <input type="text" placeholder="Fullname" name="name" required>
            <i class="fa-regular fa-user"></i>
        </div>
        <div class="input-style">
            <input type="email" placeholder="Email Address" name="email" required>
            <i class="fa-regular fa-user"></i>
        </div>
        <div class="input-style">
            <input type="password" placeholder="Password" name="password" required>
            <i class="fa-solid fa-lock"></i>
        </div>

        <button type="register" class="btn-register" >Register</button>

    </form>
</div>

@endsection
