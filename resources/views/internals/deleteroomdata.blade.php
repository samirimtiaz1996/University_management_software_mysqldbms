@extends('layouts.app')
@section('title','Delete Room Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Rooms</h1>

<form class="pb-5" action="deleteroomdata" method="post">
  <div class="form-group">
    <label for="roomno">Room No and Block:</label>
    <select name="roomno" id="roomno" class="form-control">
      @foreach($Rdatas as $data)
        <option value="{{ $data->Room_No }}">{{$data->Room_No}}---{{$data->Room_Block}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="roomblock">Select Again:</label>
    <select name="roomblock" id="roomblock" class="form-control">
      @foreach($Rdatas as $data)
        <option value="{{ $data->Room_Block }}">{{$data->Room_No}}---{{$data->Room_Block}}</option>
      @endforeach
    </select>
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
