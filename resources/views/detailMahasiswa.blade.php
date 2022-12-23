@extends('home')

@section('title', 'Detail of Students : ')

@section('body')

<div class="card m-5" style="width: 18rem;" >
  <img src="{{asset('/storage/mahasiswa/'.$mahasiswa->foto)}}" alt="pp">
    <div class="card-body">
      <h5 class="card-title">{{$mahasiswa->nama}}</h5>
      <p class="card-text">{{$mahasiswa->nim}}</p>
      <p class="card-text">{{$mahasiswa->alamat}}</p>
      <p class="card-text">{{$mahasiswa->birthdate}}</p>
      <a href="/editStudents/{{$mahasiswa->id}}" class="btn btn-warning">Edit</a>
      <form action="/deleteStudents/{{$mahasiswa->id}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger">Delete</button>
      </form>
      <a href="/showStudents" class="btn btn-primary">Click here to go back!</a>
    </div>
  </div>

@endsection