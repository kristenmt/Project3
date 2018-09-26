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
Take questionnaire
@stop

@section('content')
  <h4>Take this fun questionnaire to find out where you should move to next!</h4>
    <hr>
      <div class="container">
      <form action="/questionnaire" method="GET" > 
        {{csrf_field()}}
        {{-- <div class="form-group row">
          <h3>population</h3>
          <br>
          <label>
            <input type="checkbox" class="radio" value="L" name="fooby_1" />Large</label>
          <label>
            <input type="checkbox" class="radio" value="M" name="fooby_1" />Medium</label>
          <label>
            <input type="checkbox" class="radio" value="S" name="fooby_1" />Small</label>
        </div> --}}
      <div class="form-group row">
        <h3>Cost of Living</h3>
        <br>
        <label>
          <input type="checkbox" class="radio" value="H" name="fooby_2" />High</label>
        <label>
          <input type="checkbox" class="radio" value="M" name="fooby_2" />Medium</label>
        <label>
          <input type="checkbox" class="radio" value="L" name="fooby_2" />Low</label>
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
          <input type="checkbox" class="radio" value="NE" name="fooby_6" />NE</label>
        <label>
          <input type="checkbox" class="radio" value="MW" name="fooby_6" />MW</label>
        <label>
          <input type="checkbox" class="radio" value="S" name="fooby_6" />S</label>
        <label>
          <input type="checkbox" class="radio" value="NW" name="fooby_6" />NW</label>
        <label>
          <input type="checkbox" class="radio" value="W" name="fooby_6" />W</label>
        <label>
          <input type="checkbox" class="radio" value="OU" name="fooby_6" />OU</label>      
      </div>
      <div class="form-group row">
        <h3>Terrain</h3>
        <br>
        <label>
          <input type="checkbox" class="radio" value="Beach" name="fooby_7" />Beach</label>
        <label>
          <input type="checkbox" class="radio" value="Desert" name="fooby_7" />Desert</label>
        <label>
          <input type="checkbox" class="radio" value="Flat Lands" name="fooby_7" />Flat Land</label>
        <label>
          <input type="checkbox" class="radio" value="Mountains" name="fooby_7" />Mountains</label>
      </div> 
        <button type="submit" class="btn btn-primary">Submit</button>   
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

