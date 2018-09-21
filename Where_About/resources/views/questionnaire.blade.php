@extends('layout')

@section('title')
Take questionnaire
@stop

@section('content')
  <h4>Take this fun questionnaire to find out where you should move to next!</h4>
    <hr>
    


    <div>
      <h3>Population</h3>
      <label>
        <input type="checkbox" class="radio" value="L" name="fooby[1][]" />High</label>
      <label>
        <input type="checkbox" class="radio" value="M" name="fooby[1][]" />Medium High</label>
      <label>
        <input type="checkbox" class="radio" value="S" name="fooby[1][]" />Low</label>
      <label>
        <input type="checkbox" class="radio" value="XS" name="fooby[1][]" />Rual</label>
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
        <input type="checkbox" class="radio" value="XL" name="fooby[1][]" />$$$$</label>
      <label>
        <input type="checkbox" class="radio" value="L" name="fooby[1][]" />$$$</label>
      <label>
        <input type="checkbox" class="radio" value="M" name="fooby[1][]" />$$</label>
      <label>
        <input type="checkbox" class="radio" value="S" name="fooby[1][]" />$</label>
    </div>
    <h3>Employment</h3>
      <label>
        <input type="checkbox" class="radio" value="L" name="fooby[1][]" />High</label>
      <label>
        <input type="checkbox" class="radio" value="M" name="fooby[1][]" />Medium</label>
      <label>
        <input type="checkbox" class="radio" value="H" name="fooby[1][]" />Low</label>
      
    </div>
    <div>
      <h3>Weather</h3>
      <label>
        <input type="checkbox" class="radio" value="H&H" name="fooby[2][]" />Hot & Humid</label>
      <label>
        <input type="checkbox" class="radio" value="Snow" name="fooby[2][]" />Snow</label>
      <label>
        <input type="checkbox" class="radio" value="H&D" name="fooby[2][]" />Hot & Dry</label>
        <label>
        <input type="checkbox" class="radio" value="All 4 Seasons" name="fooby[2][]" />4 Seasons</label>
    </div> 
    <div>
      <h3>Region</h3>
      <label>
        <input type="checkbox" class="radio" value="NE" name="fooby[2][]" />North East</label>
      <label>
        <input type="checkbox" class="radio" value="MW" name="fooby[2][]" />Mid-West</label>
      <label>
        <input type="checkbox" class="radio" value="S" name="fooby[2][]" />South</label>
      <label>
        <input type="checkbox" class="radio" value="NW" name="fooby[2][]" />North West</label>
      <label>
        <input type="checkbox" class="radio" value="W" name="fooby[2][]" />West</label>
      <label>
         <input type="checkbox" class="radio" value="OU" name="fooby[2][]" />Outside the States</label>      
    </div>
    <div>
      <h3>Terrain</h3>
      <label>
        <input type="checkbox" class="radio" value="Beach" name="fooby[2][]" />Beach</label>
      <label>
        <input type="checkbox" class="radio" value="Desert" name="fooby[2][]" />Desert</label>
      <label>
        <input type="checkbox" class="radio" value="Flat Land" name="fooby[2][]" />Flat Land</label>
      <label>
        <input type="checkbox" class="radio" value="Lake" name="fooby[2][]" />Lake</label>
      <label>
        <input type="checkbox" class="radio" value="Beach & Mnt" name="fooby[2][]" />Beach & Mountains</label>
      <label>
         <input type="checkbox" class="radio" value="Mountains" name="fooby[2][]" />Mountains</label>
      <label>
        <input type="checkbox" class="radio" value="River" name="fooby[2][]" />River</label>      
    </div>
    <button class="btn btn-primary">Submit</button>
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