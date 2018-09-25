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
  <h4>Take this fun questionnaire to find out where you should move to next!</h4>
</div>  
  <hr>
    
  <div class="main-content" id="quiz-content">
    <div>
      <h3>Population</h3>
      <label>
        <input type="checkbox" class="radio" value="L" name="fooby[1][]" />High</label>
      <label>
        <input type="checkbox" class="radio" value="M" name="fooby[1][]" />Medium High</label>
      <label>
        <input type="checkbox" class="radio" value="S" name="fooby[1][]" />Low</label>
      <label>
        <input type="checkbox" class="radio" value="XS" name="fooby[1][]" />Rural</label>
    </div>
    <div>
      <h3>Cost of Living</h3>
      <label>
        <input type="checkbox" class="radio" value="High" name="fooby[2][]" />$$$$</label>
      <label>
        <input type="checkbox" class="radio" value="Medium High" name="fooby[2][]" />$$$</label>
      <label>
        <input type="checkbox" class="radio" value="Medium" name="fooby[2][]" />$$</label>
      <label>
        <input type="checkbox" class="radio" value="Low" name="fooby[2][]" />$</label>
    </div>
    <div>
      <h3>Property Value</h3>
      <label>
        <input type="checkbox" class="radio" value="XL" name="fooby[3][]" />$$$$</label>
      <label>
        <input type="checkbox" class="radio" value="L" name="fooby[3][]" />$$$</label>
      <label>
        <input type="checkbox" class="radio" value="M" name="fooby[3][]" />$$</label>
      <label>
        <input type="checkbox" class="radio" value="S" name="fooby[3][]" />$</label>
    </div>
    <div>
    <h3>Employment</h3>
      <label>
        <input type="checkbox" class="radio" value="L" name="fooby[4][]" />High</label>
      <label>
        <input type="checkbox" class="radio" value="M" name="fooby[4][]" />Medium</label>
      <label>
        <input type="checkbox" class="radio" value="H" name="fooby[4][]" />Low</label>
      
    </div>
    <div>
      <h3>Weather</h3>
      <label>
        <input type="checkbox" class="radio" value="H&H" name="fooby[5][]" />Hot & Humid</label>
      <label>
        <input type="checkbox" class="radio" value="Snow" name="fooby[5][]" />Snow</label>
      <label>
        <input type="checkbox" class="radio" value="H&D" name="fooby[5][]" />Hot & Dry</label>
        <label>
        <input type="checkbox" class="radio" value="All 4 Seasons" name="fooby[5][]" />4 Seasons</label>
    </div> 
    <div>
      <h3>Region</h3>
      <label>
        <input type="checkbox" class="radio" value="NE" name="fooby[6][]" />North East</label>
      <label>
        <input type="checkbox" class="radio" value="MW" name="fooby[6][]" />Mid-West</label>
      <label>
        <input type="checkbox" class="radio" value="S" name="fooby[6][]" />South</label>
      <label>
        <input type="checkbox" class="radio" value="NW" name="fooby[6][]" />North West</label>
      <label>
        <input type="checkbox" class="radio" value="W" name="fooby[6][]" />West</label>
      <label>
         <input type="checkbox" class="radio" value="OU" name="fooby[6][]" />Outside the States</label>      
    </div>
    <div>
      <h3>Terrain</h3>
      <label>
        <input type="checkbox" class="radio" value="Beach" name="fooby[7][]" />Beach</label>
      <label>
        <input type="checkbox" class="radio" value="Desert" name="fooby[7][]" />Desert</label>
      <label>
        <input type="checkbox" class="radio" value="Flat Land" name="fooby[7][]" />Flat Land</label>
      <label>
        <input type="checkbox" class="radio" value="Lake" name="fooby[7][]" />Lake</label>
      <label>
        <input type="checkbox" class="radio" value="Beach & Mnt" name="fooby[7][]" />Beach & Mountains</label>
      <label>
         <input type="checkbox" class="radio" value="Mountains" name="fooby[7][]" />Mountains</label>
      <label>
        <input type="checkbox" class="radio" value="River" name="fooby[7][]" />River</label>      
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
    @section('signout')
    <a href="/results"><button class="btn">Submit</button>
      
    </div>
      @stop
   
    
    @stop