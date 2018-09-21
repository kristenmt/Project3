@extends('layout')

@section ('authentication')
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
