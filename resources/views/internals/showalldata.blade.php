@extends('layouts.app')
@section('title','View All Data')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Registered AND Unregistered Students</h1>

            <table border = "1">
                <tr>
                    <td>Roll</td>

                </tr>
                @foreach ($Adata as $data)
                    <tr>
                        <td>{{ $data->StudentId }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection