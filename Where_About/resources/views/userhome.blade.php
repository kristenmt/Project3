@extends('layout')

@section('title')
Welcome Back!
@stop

@section('content')
  <h4>Here are your saved cities:</h4>

    <hr>
    <h2>Boston, MA</h2>
    <a href="https://www.boston.gov/visiting-boston" target="_blank">www.boston.gov/</a>

    @stop
    @section('signout')
    <hr>
<a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
@stop
