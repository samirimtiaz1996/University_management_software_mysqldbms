@extends('layouts.app')
@section('title','Delete Teacher Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Teachers</h1>

<form class="pb-5" action="deleteteacher" method="post">
  <div class="form-group">
    <label for="teacherid">Teacher Id:</label>
    <select name="teacherid" id="teacherid" class="form-control">
      @foreach($Tdatas as $data)
        <option value="{{ $data->TeacherId }}">{{$data->TeacherId}}</option>
      @endforeach
    </select>
  </div>

<hr>

  <button class="btn btn-primary" type="submit" name="button">Submit</button>
  @csrf
</form>
<hr>
    <div class="button">
      <a class="show" href="/viewteacherdata">View Teacher Data</a>
    </div>

</div>
</div>
@endsection
