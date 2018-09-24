@extends('layout')

@section ('authentication')
<style>
    body {
        /* background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../images/diego-jimenez-258120-unsplash.jpg); */
        /* background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url(../images/diego-jimenez-258120-unsplash.jpg); */
        /* background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(../images/diego-jimenez-258120-unsplash.jpg); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(../images/road1.jpg);
        /* background-image: url(../images/road1.jpg); */
        background-size: cover;
        width: 100vw;
        height: 100vh;
        
    }
</style>
<div class="content">
        <div class="title m-b-md">
            Where About
        </div>
        <div class="intro">
            Find out where you should relocate to.
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
