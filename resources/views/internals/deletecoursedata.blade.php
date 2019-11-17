@extends('layouts.app')
@section('title','Add Room Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Rooms</h1>

<form class="pb-5" action="deletecoursedata" method="post">
  <div class="form-group">
    <label for="coursenumber">Select Course Number:</label>
    <select name="coursenumber" id="coursenumber" class="form-control">
      @foreach($Cdatas as $data)
        <option value="{{ $data->Course_Number}}">{{$data->Course_Number}}</option>
      @endforeach
    </select>
  </div>

<hr>

  <button class="btn btn-primary" type="submit" name="button">Submit</button>
  @csrf
</form>
<hr>
    <div class="button">
      <a class="show" href="/viewcoursedata">View Course Data</a>
    </div>

</div>
</div>
@endsection
