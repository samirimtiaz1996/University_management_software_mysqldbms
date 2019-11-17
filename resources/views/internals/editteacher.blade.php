@extends('layouts.app')
@section('title','Edit Teacher Data')
@section('content')
  <div class="row">
    <div class="col-12">
      <h1>Edit teacher Data</h1>

      <form class="pb-5" action="editteacher" method="post">
        <div class="form-group">
          <label for="teacherid">Teacher Id:</label>
          <select name="teacherid" id="teacherid" class="form-control">
            @foreach($Tdatas as $data)
              <option value="{{ $data->TeacherId }}">{{$data->TeacherId}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group pb-2">
          <label for="teachername">Name:</label>
          <input class="form-control" type="text" name="teachername" value="{{ old('teachername')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('teachername')}}
        </div>
        <div class="form-group pb-2">
          <label for="password">Password</label>
          <input class="form-control" type="text" name="password" value="{{ old('password')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('password')}}
        </div>
        <div class="form-group pb-2">
          <label for="email">Email:</label>
          <input class="form-control"  type="text" name="email" value="{{ old('email')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('email')}}
        </div>


        <div class="form-group pb-2">
          <label for="phoneno">Phone No:</label>
          <input class="form-control"  type="text" name="phoneno" value="{{ old('phoneno')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('phoneno')}}
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
        <a class="show" href="/viewteacherdata">View teacher Data</a>
      </div>

    </div>
  </div>
@endsection
