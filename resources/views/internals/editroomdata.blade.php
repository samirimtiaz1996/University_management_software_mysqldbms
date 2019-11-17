@extends('layouts.app')
@section('title','Add Room Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Rooms</h1>

<form class="pb-5" action="editroomdata" method="post">
  <div class="form-group">
    <label for="oldroomno">Select Old Room No and Block:</label>
    <select name="oldroomno" id="oldroomno" class="form-control">
      @foreach($Rdatas as $data)
        <option value="{{ $data->Room_No }}">{{$data->Room_No}}---{{$data->Room_Block}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="oldroomblock">Select Again:</label>
    <select name="oldroomblock" id="oldroomblock" class="form-control">
      @foreach($Rdatas as $data)
        <option value="{{ $data->Room_Block }}">{{$data->Room_No}}---{{$data->Room_Block}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group pb-2">
    <label for="newroomno">Select New Room No:</label>
    <input class="form-control" type="text" name="newroomno" value="{{ old('newroomno')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('newroomno')}}
  </div>

  <div class="form-group pb-2">
    <label for="newroomblock">Select New Room Block:</label>
    <input class="form-control"  type="text" name="newroomblock" value="{{ old('newroomblock')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('newroomblock')}}
  </div>

<hr>

  <button class="btn btn-primary" type="submit" name="button">Submit</button>
  @csrf
</form>
<hr>
    <div class="button">
      <a class="show" href="/viewroomdata">View Room Data</a>
    </div>

</div>
</div>
@endsection
