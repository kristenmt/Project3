@extends('layout')

@section ('authentication')
<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/road1.jpg);
        background-size: cover;
        width: 100vw;
        height: 100vh;
    }
    .title h1 {
        font-weight: 100;
        font-size:100px;
    }
    .intro h5 {
        font-weight: 100;
        font-size: 25px;
        padding-top: 10px;
    }
</style>
<div class="content">
        <div class="title">
            <h1>Where To</h1>
        </div>
        <div class="intro">
            <h5>Find out where you should relocate to.</h5>
        </div>
        @if (Route::has('login'))
        <div class="links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('register') }}">Sign Up</a>
                <a href="{{ route('login') }}">Sign In</a>
            @endauth
        </div>
    @endif
@endsection
