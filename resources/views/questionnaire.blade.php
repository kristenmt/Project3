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
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/road3.jpg);
        background-size: cover;
        width: 100vw;
        height: 100vh;
    }
</style>

@extends('layout')
@section('title')
<nav>
  <h3>Where To</h3>
</nav>
@stop
@section('content')
<div class="page-intro">
  <h4>Take this short quiz to find out where you should move to next!</h4>
</div> 
  <hr>
      <div class="main-content" id="quiz-content">
      <form action="/questionnaire" method="GET" > 
        {{csrf_field()}}
      <div class="form-group row">
        <h3>Cost of Living</h3>
        <br>
        <label>
          <input type="checkbox" class="radio" value="H" name="fooby_2" /> &nbsp;High</label>
        <label>
          <input type="checkbox" class="radio" value="M" name="fooby_2" />  &nbsp;Medium</label>
        <label>
          <input type="checkbox" class="radio" value="L" name="fooby_2" />  &nbsp;Low</label>
      </div>
      <div class="form-group row">
        <h3>Weather</h3>
        <br>
        <label>
          <input type="checkbox" class="radio" value="Hot" name="fooby_3" />Hot</label>
        <label>
          <input type="checkbox" class="radio" value="Snow" name="fooby_3" />Snow</label>
        <label>
          <input type="checkbox" class="radio" value="All 4 Seasons" name="fooby_3" />All 4 Seasons</label>
      </div>
      <div class="form-group row">
        <h3>Region</h3>
        <br>
        <label>
          <input type="checkbox" class="radio" value="NE" name="fooby_6" />  &nbsp;NE</label>
        <label>
          <input type="checkbox" class="radio" value="MW" name="fooby_6" />  &nbsp;MW</label>
        <label>
          <input type="checkbox" class="radio" value="S" name="fooby_6" />  &nbsp;S</label>
        <label>
          <input type="checkbox" class="radio" value="NW" name="fooby_6" />  &nbsp;NW</label>
        <label>
          <input type="checkbox" class="radio" value="W" name="fooby_6" />  &nbsp;W</label>
        <label>
          <input type="checkbox" class="radio" value="OU" name="fooby_6" />  &nbsp;Outside Continental US</label>      
      </div>
      <div class="form-group row">
        <h3>Terrain</h3>
        <br>
        <label>
          <input type="checkbox" class="radio" value="Beach" name="fooby_7" />  &nbsp;Beach</label>
        <label>
          <input type="checkbox" class="radio" value="Desert" name="fooby_7" />  &nbsp;Desert</label>
        <label>

          <input type="checkbox" class="radio" value="Flat Land" name="fooby_7" />  &nbsp;Flat Land</label>

        <label>
          <input type="checkbox" class="radio" value="Mountains" name="fooby_7" />  &nbsp;Mountains</label>
      </div> 
        <button type="submit" class="btn">Submit</button>   
      </form>   
    </div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>$("input:checkbox").on('click', function() {
      // in the handler, 'this' refers to the box clicked on
      var $box = $(this);
      if ($box.is(":checked")) {
        // the name of the box is retrieved using the .attr() method
        // as it is assumed and expected to be immutable
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        // the checked state of the group/box on the other hand will change
        // and the current value is retrieved using .prop() method
        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });</script>
    @stop

