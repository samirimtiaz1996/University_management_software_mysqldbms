@extends('layouts.app')
@section('title','Edit Course Data')
@section('content')
  <div class="row">
    <div class="col-12">
      <h1>courses</h1>

      <form class="pb-5" action="editcoursedata" method="post">
        <div class="form-group">
          <label for="coursenumber">Course Id:</label>
          <select name="coursenumber" id="coursenumber" class="form-control">
            @foreach($Cdatas as $data)
              <option value="{{ $data->Course_Number }}">{{$data->Course_Number}}</option>
            @endforeach
          </select>
        </div>


        <div class="form-group pb-2">
          <label for="coursetitle">Course Title:</label>
          <input class="form-control"  type="text" name="coursetitle" value="{{ old('coursetitle')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('coursetitle')}}
        </div>
        <div class="form-group pb-2">
          <label for="status">Status:</label>
          <input class="form-control" type="text" name="status" value="{{ old('status')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('status')}}
        </div>

        <div class="form-group pb-2">
          <label for="obtainedpoint">Obtained Point:</label>
          <input class="form-control"  type="text" name="obtainedpoint" value="{{ old('obtainedpoint')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('obtainedpoint')}}
        </div>
        <div class="form-group pb-2">
          <label for="credit">Credit:</label>
          <input class="form-control" type="text" name="credit" value="{{ old('credit')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('credit')}}
        </div>

        <div class="form-group">
          <label for="studentid">StudentId:</label>
          <select name="studentid" id="studentid" class="form-control">
            @foreach($Sdatas as $data)
              <option value="{{ $data->StudentId }}">{{$data->StudentId}}</option>
            @endforeach
          </select>
        </div>
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
        <a class="show" href="/viewcoursedata">View Course Data</a>
      </div>

    </div>
  </div>
@endsection
