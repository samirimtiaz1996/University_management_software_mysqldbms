@extends('layouts.app')
@section('title','Delete Student Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Students</h1>

<form class="pb-5" action="deletestudentdata" method="post">
  <div class="form-group">
    <label for="studentid">Student Id:</label>
    <select name="studentid" id="studentid" class="form-control">
      @foreach($Sdatas as $data)
        <option value="{{ $data->StudentId }}">{{$data->StudentId}}</option>
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
