@extends('layouts.app')
@section('title','Add Teacher Data')
@section('content')
  <div class="row">
    <div class="col-12">
      <h1>Add teacher Data</h1>
      <form class="pb-5" action="addteacher" method="post">
        <div class="form-group pb-2">
          <label for="teacherid">teacher Id:</label>
          <input class="form-control" type="text" name="teacherid" value="{{ old('teacherid')}}">
        </div>
        <div class="font-weight-bold">
          {{$errors->first('teacherid')}}
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
        <div class="form-group pb-2">
          <label for="roomno">Room No:</label>
          <select name="roomno" id="roomno" class="form-control">
            @foreach($datas as $data)
              <option value="{{ $data->Room_No }}">{{$data->Room_No}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group pb-2">
          <label for="roomblock">Room Block:</label>
          <select name="roomblock" id="roomblock" class="form-control">
            @foreach($datas as $data)
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
