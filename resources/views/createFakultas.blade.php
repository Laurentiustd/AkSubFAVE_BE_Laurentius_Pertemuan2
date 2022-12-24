@extends('home')

@section('title', 'create category')

@section('body')

<form action="/storeFakultas" method="POST" enctype="multipart/form-data" class="m-5">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Fakultas</label>
      <input type="text" class="form-control @error('Judul') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaFakultas" value="{{old('name')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
