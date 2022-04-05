@extends('layouts.main')
@section('container')
<div class="container text-center mt-4">
    <h1>Ini Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle">
</div>
@endsection



