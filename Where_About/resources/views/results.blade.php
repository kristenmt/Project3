@extends('layout')


@section('title')
Results page
@stop

@section('content')
  <h4>Here are your results!</h4>

    <hr>

    <h2>New York, NY</h2>
    <a href="https://www.nycgo.com/" target="_blank">www.nycgo.com</a>

    <h2>Boston, MA</h2>
    <a href="https://www.boston.gov/visiting-boston" target="_blank">www.boston.gov/</a>

    @stop

    @section('signout')
    <hr>
<a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
@stop