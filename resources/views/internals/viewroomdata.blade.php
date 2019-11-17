@extends('layouts.app')
@section('title','View Room Data')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Rooms</h1>

    <table border = "1">
      <tr>
        <td>Room no</td>
        <td>Room Block</td>

      </tr>
      @foreach ($datas as $data)
        <tr>
          <td>{{ $data->Room_No }}</td>
          <td>{{ $data->Room_Block }}</td>
        </tr>
    @endforeach
    </table>
</div>
</div>
@endsection
