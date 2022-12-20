@extends('home');

@section('title', 'Input Students')

@section('body')
<form class="m-5" action="/storeStudents" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Students Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Students ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nim">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Students Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="address">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Birth Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/showStudents">Click here to see all students!</a>
</form>


@endsection