@extends('layouts.app')
@section('title','View Student Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Students</h1>

    <table border = "1">
      <tr>
        <td>Roll</td>
        <td>GPA</td>

      </tr>
      @foreach ($Sdatas as $data)
        <tr>
          <td>{{ $data->StudentId }}</td>
          <td>{{ $data->result }}</td>
        </tr>
    @endforeach
    </table>
</div>
</div>
@endsection
