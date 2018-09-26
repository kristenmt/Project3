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
        <h3>
            Where To
        </h3>
      </nav>
@stop

@section('content')
<div class="page-intro" id="results-intro">
    <h1>Here are your results!</h1>
</div>
<div class="results-content">
        @if(count($results) > 1)
            @foreach($results as $key => $value)
                <div class="card">
                    <div class="card-header">
                        Location {{$key + 1}}
                    </div>
                    <p>{{$value->City}}</p>
                    <p>{{$value->State}}</p>
                    <p>{{$value->Avg_Rent}} is the average rent.</p>  
                    <p>{{$value->Property_Value}} is the property value (s=low, m=medium, h=high)</p>
                    <p>{{$value->Cost_of_Living}} is the cost of living (h=high, m=medium, l=low)</p>
                    <p>Typical weather is {{$value->Weather}}</p>
                </div>
</div>
            @endforeach
        @else
            <p> No Post Found</p>
        @endif
  @endsection

    @section('signout')
    
<a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
@stop