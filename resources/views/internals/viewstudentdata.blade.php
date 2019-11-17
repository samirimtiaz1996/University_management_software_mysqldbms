@extends('layouts.app')
@section('title','View Student Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Students</h1>

    <table border = "1">
      <tr>
        <td>Roll</td>
        <td>Student Name</td>
        <td>Password</td>
        <td>Email</td>
        <td>Date of birth</td>
        <td>Batch</td>
        <td>Is he active in class?</td>
        <td>Room no</td>
        <td>Room Block</td>

      </tr>
      @foreach ($Sdatas as $data)
        <tr>
          <td>{{ $data->StudentId }}</td>
          <td>{{ $data->StudentName }}</td>
          <td>{{ $data->Password }}</td>
          <td>{{ $data->Email }}</td>
          <td>{{ $data->Date_of_birth }}</td>
          <td>{{ $data->Batch }}</td>
          <td>{{ $data->Status }}</td>
          <td>{{ $data->Room_No }}</td>
          <td>{{ $data->Room_Block }}</td>
        </tr>
    @endforeach
    </table>
</div>
</div>
@endsection
