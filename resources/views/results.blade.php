<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{-- Bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>
<style>
.card-header {
    background-color: #fff;
}
</style>

@extends('layout')
@section('title')
<nav>
        <h3>Where To</h3>
        <a class="btn btn-link" id="logout" href="/logout">Logout</a>
</nav>
@stop
@section('content')
<div class="page-intro" id="results-intro">
    <h1 id="name">Here are your results!</h1>
</div>
<div id="resultsCard" class="results-content">
        @if(count($results) > 1)
            @foreach($results as $key => $value)
                <div class="card">
                    <div class="card-header">
                        Location {{$key + 1}}
                    </div>

                    <p class="nv">{{$value->City}}</p>

                    <p class="nv">{{$value->State}}</p> 
                    <p class="nv"> Average Rent is ${{$value->Avg_Rent}}</p>
                    <p class="nv">Median Income is ${{$value->Median_Income}}</p>
                </div>
</div>
            @endforeach
        @else
            <p> No Post Found</p>
        @endif

  @endsection
