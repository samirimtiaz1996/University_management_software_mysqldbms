@extends('layouts.app')
@section('title','Add Student Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Add Student Data</h1>
<!--<ul>
  <li>Customers 1</li>
  <li>customers 2</li>
<ul>
-->
<form class="pb-5" action="addstudentdata" method="post">
  <div class="form-group pb-2">
  <label for="studentid">Student Id:</label>
  <input class="form-control" type="text" name="studentid" value="{{ old('studentid')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('studentid')}}
  </div>
  <div class="form-group pb-2">
    <label for="studentname">Name:</label>
    <input class="form-control" type="text" name="studentname" value="{{ old('studentname')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('name')}}
  </div>
  <div class="form-group pb-2">
    <label for="password">Password</label>
    <input class="form-control" type="text" name="password" value="{{ old('password')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('password')}}
  </div>
  <div class="form-group pb-2">
    <label for="dateofbirth">Date of Birth:</label>
    <input class="form-control" type="date" name="dateofbirth" value="{{ old('dateofbirth')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('dateofbirth')}}
  </div>
  <div class="form-group pb-2">
    <label for="batch">Batch:</label>
    <input class="form-control" type="text" name="batch" value="{{ old('batch')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('batch')}}
  </div>
  <div class="form-group pb-2">
    <label for="email">Email:</label>
    <input class="form-control"  type="text" name="email" value="{{ old('email')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('email')}}
  </div>


  <div class="form-group">
    <label for="status">Status:</label>
    <select name="status" id="status" class="form-control">
      <option value="" disabled> Is he still studying?</option>
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
  </div>

  <div class="form-group">
    <label for="roomno">Room No:</label>
    <select name="roomno" id="roomno" class="form-control">
      @foreach($Rdatas as $data)
        <option value="{{ $data->Room_No }}">{{$data->Room_No}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="roomblock">Room Block:</label>
    <select name="roomblock" id="roomblock" class="form-control">
      @foreach($Rdatas as $data)
        <option value="{{ $data->Room_Block }}">{{$data->Room_Block}}</option>
      @endforeach
    </select>
  </div>

<hr>

  <button class="btn btn-primary" type="submit" name="button">Submit</button>
  @csrf
</form>
<hr>

    <div class="button">
            <a class="show" href="/viewstudentdata">View Student Data</a>
          </div>

</div>
</div>
@endsection
