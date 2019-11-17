@extends('layouts.app')
@section('title','View Teacher Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>teachers</h1>

    <table border = "1">
      <tr>
        <td>Roll</td>
        <td>teacher Name</td>
        <td>Password</td>
        <td>Email</td>
        <td>Phone No</td>
        <td>Room no</td>
        <td>Room Block</td>

      </tr>
      @foreach ($datas as $data)
        <tr>
          <td>{{ $data->TeacherId }}</td>
          <td>{{ $data->TeacherName }}</td>
          <td>{{ $data->Password }}</td>
          <td>{{ $data->Email }}</td>
          <td>{{ $data->PhoneNumber }}</td>
          <td>{{ $data->Room_No }}</td>
          <td>{{ $data->Room_Block }}</td>
        </tr>
    @endforeach
    </table>
</div>
</div>
@endsection
