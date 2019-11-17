@extends('layouts.app')
@section('title','View Student Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Students</h1>

    <table border = "1">
      <tr>
        <td>Roll No</td>
        <td>Name</td>
        <td>GPA</td>
        <td>Email</td>
        <td>Room No</td>
        <td>Room Block</td>


      </tr>
      @foreach ($Sdatas as $data)
        <tr>
          <td>{{ $data->StudentId }}</td>
          <td>{{ $data->StudentName }}</td>
          <td>{{ $data->result }}</td>
          <td>{{ $data->Email }}</td>
          <td>{{ $data->Room_No }}</td>
          <td>{{ $data->Room_Block }}</td>


        </tr>
    @endforeach
    </table>
</div>
</div>
@endsection
