@extends('layouts.app')
@section('title','View Student Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Courses</h1>

    <table border = "1">
      <tr>
        <td>Couse_Number</td>
        <td>Course_Title</td>
        <td>Status</td>
        <td>Obtained_Point</td>
        <td>Credit</td>
        <td>StudentId</td>
        <td>TeacherId</td>

      </tr>
      @foreach ($datas as $data)
        <tr>
          <td>{{ $data->Course_Number }}</td>
          <td>{{ $data->Course_Title }}</td>
          <td>{{ $data->Status }}</td>
          <td>{{ $data->Obtained_Point }}</td>
          <td>{{ $data->Credit }}</td>
          <td>{{ $data->StudentId }}</td>
          <td>{{ $data->TeacherId }}</td>
        </tr>
    @endforeach
    </table>
</div>
</div>
@endsection
