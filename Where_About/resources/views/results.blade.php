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



@extends('layout')

@section('title')
<nav>
<h3>Where To</h3>
</nav>
@stop

@section('content')
 
  <div class="page-intro">
      <h4>Here are your results!</h4>
    </div> 
    <hr>
    <div class="main-content">
    <h2>New York, NY</h2>
    <a href="https://www.nycgo.com/" target="_blank">www.nycgo.com</a>

    <h2>Boston, MA</h2>
    <a href="https://www.boston.gov/visiting-boston" target="_blank">www.boston.gov/</a>
    
    @stop

    @section('signout')
    <hr>
<a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
</div>
@stop