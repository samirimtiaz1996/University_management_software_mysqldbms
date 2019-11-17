@extends('layouts.app')
@section('title','Admin Block')
@section('content')
<div class="row">
  <ul class="list-unstyled">
  <li class="list-unstyled">
    <a class="nav-link" href="addstudentdata">Add Student Data</a>
  </li>
  <li class="list-unstyled">
    <a class="nav-link" href="addteacher">Add Teacher Data</a>
  </li>
  <li class="list-unstyled">
    <a class="nav-link" href="addroomdata">Add Room Data</a>
  </li>
  <li class="list-unstyled">
    <a class="nav-link" href="addcoursedata">Add Course Data</a>
  </li>
  </ul>
  <ul class="list-unstyled">
    <li class="list-unstyled">
      <a class="nav-link" href="editstudentdata">Edit Student Data</a>
    </li>
    <li class="list-unstyled">
      <a class="nav-link" href="editteacher">Edit Teacher Data</a>
    </li>
    <li class="list-unstyled">
      <a class="nav-link" href="editroomdata">Edit Room Data</a>
    </li>
    <li class="list-unstyled">
      <a class="nav-link" href="editcoursedata">Edit Course Data</a>
    </li>
  </ul>
  <ul class="list-unstyled">
    <li class="list-unstyled">
      <a class="nav-link" href="deletestudentdata">Delete Student Data</a>
    </li>
    <li class="list-unstyled">
      <a class="nav-link" href="deleteteacher">Delete Teacher Data</a>
    </li>
    <li class="list-unstyled">
      <a class="nav-link" href="deleteroomdata">Delete Room Data</a>
    </li>
    <li class="list-unstyled">
      <a class="nav-link" href="deletecoursedata">Delete Course Data</a>
    </li>
  </ul>
  <ul>
    <li class="list-unstyled">
      <a class="nav-link" href="showalldata">show All Data</a>
    </li>
  </ul>
</div>
@endsection
