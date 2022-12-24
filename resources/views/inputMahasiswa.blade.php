@extends('home');

@section('title', 'Input Students')

@section('body')
<form class="m-5" action="/storeStudents" method="POST"  enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Students Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Students ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nim">
    @error('nim')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Students Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="alamat">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Birth Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="birthdate">
    @error('birthdate')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
    @error('foto')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fakultas</label>
    <select class="form-select" aria-label="Default select example" name="fakultas">
      @foreach ($fakultas as $i)
          <option value="{{$i->id}}">{{$i->namaFakultas}}</option>
      @endforeach
    </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/showStudents">Click here to see all students!</a>
</form>


@endsection