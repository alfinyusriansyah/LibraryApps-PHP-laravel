@extends('layouts.main')

@section('container')
    <h1>Hello, Folk !</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="{{ $img }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection