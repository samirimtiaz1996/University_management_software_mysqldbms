@extends('layouts.app')
@section('title','View All Teacher Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Students</h1>

    <table border = "1">
      <tr>
        <td>Teacher Name</td>
        <td>Teacher Phone No</td>
        <td>Email</td>
        <td>Course Id</td>
        <td>Course Title</td>
        <td>Room no</td>
        <td>Room Block</td>


      </tr>
      @foreach ($Tdatas as $data)
        <tr>
          <td>{{ $data->TeacherName }}</td>
          <td>{{ $data->PhoneNumber }}</td>
          <td>{{ $data->Email }}</td>
          <td>{{ $data->Course_Number }}</td>
          <td>{{ $data->Course_Title }}</td>
          <td>{{ $data->Room_No }}</td>
          <td>{{ $data->Room_Block }}</td>
        </tr>
      @endforeach
    </table>
</div>
</div>
@endsection
