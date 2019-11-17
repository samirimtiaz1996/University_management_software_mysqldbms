@extends('layouts.app')
@section('title','Customer List')
@section('content')
<div class="row">
  <div class="col-12">
<h1>Customers</h1>
<!--<ul>
  <li>Customers 1</li>
  <li>customers 2</li>
<ul>
-->
<form class="pb-5" action="customers" method="post">
  <div class="form-group pb-2">
    <label for="name">Name:</label>
    <input class="form-control" type="text" name="name" value="{{ old('name')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('name')}}
  </div>

  <div class="form-group pb-2">
    <label for="Email">Email:</label>
    <input class="form-control"  type="text" name="email" value="{{ old('email')}}">
  </div>
  <div class="font-weight-bold">
    {{$errors->first('email')}}
  </div>


  <div class="form-group">
    <label for="active">Status:</label>
    <select name="active" id="active" class="form-control">
      <option value="" disabled> Select customer status</option>
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
  </div>

  <div class="form-group">
    <label for="company_id">Company:</label>
    <select name="company_id" id="company_id" class="form-control">
      @foreach($companies as $company)
        <option value="{{ $company->id }}">{{$company->name}}</option>
      @endforeach
    </select>
  </div>
<hr>

  <button class="btn btn-primary" type="submit" name="button">Submit</button>
  @csrf
</form>
<hr>

  <div class="row">
    <div class="col-6">

      <h3>Active Customers</h3>
      <ul>
      @foreach ($ActiveCustomers as $activecustomer)
        <li>{{$activecustomer->name}}---{{ $activecustomer->company->name }} </li>
      @endforeach
      </ul>
    </div>

    <div class="col-6">
      <h3>Inactive Customers</h3>
      <ul>
      @foreach ($InactiveCustomers as $inactivecustomer)
        <li>{{$inactivecustomer->name}}---{{ $inactivecustomer->company->name }} </li>
      @endforeach
      </ul>
    </div>
  </div>
<div class="row">
<div class="col-12">
  @foreach ($companies as $company)
      <h3>{{$company->name}}</h3>
    <ul>
      @foreach ($company->customers as $customer)
        <li>{{$customer->name}}</li>
      @endforeach
    </ul>
  @endforeach
</div>
</div>
</div>
</div>
@endsection
