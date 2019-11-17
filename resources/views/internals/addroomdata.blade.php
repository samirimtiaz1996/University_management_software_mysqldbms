@extends('layouts.app')
@section('title','Add Room Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Rooms</h1>

<form class="pb-5" action="addroomdata" method="post">
  <div class="form-group pb-2">
    <label for="roomno">Room No:</label>
    <input class="form-control" type="text" name="roomno" value="{{ old('roomno')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('roomno')}}
  </div>

  <div class="form-group pb-2">
    <label for="roomblock">Room Block:</label>
    <input class="form-control"  type="text" name="roomblock" value="{{ old('roomblock')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('roomblock')}}
  </div>
<!--

  <div class="form-group">
    <label for="active">Status:</label>
    <select name="active" id="active" class="form-control">
      <option value="" disabled> Select room status</option>
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
  </div>

  <div class="form-group">
    <label for="company_id">Company:</label>
    <select name="company_id" id="company_id" class="form-control">
     {{-- @foreach($companies as $company)
        <option value="{{ $company->id }}">{{$company->name}}</option>
      @endforeach--}}
    </select>
  </div>
  -->
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
