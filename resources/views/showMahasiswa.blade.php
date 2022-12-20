@extends('home')

@section('title', 'All Students :')

@section('body')

<div style="display: grid; grid-template-columns: repeat(3, 1fr)">
@foreach ($mahasiswa as $item)
    
<div class="card m-5" style="width: 18rem;" >
    <div class="card-body">
      <h5 class="card-title">{{$item->nama}}</h5>
      <p class="card-text">{{$item->nim}}</p>
      <p class="card-text">{{$item->alamat}}</p>
      <p class="card-text">{{$item->birthdate}}</p>
      <a href="/showStudents/{{$item->id}}" class="btn btn-primary">Click here to show detail!</a>
    </div>
  </div>
@endforeach
</div>
@endsection