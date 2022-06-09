@extends('layouts.main')

@section('container')
    <h1>List Horrors Books</h1>
    @foreach ($books_horror as $horror)
    <article class="mt-4">
    <h3>{{ $horror["title"] }}</h3>
    <img src="/img/{{$horror['img'] }}" alt="" width="200" class="img-thumbnail rounded border border-dark">
    <p></p>
    <h5>by : {{ $horror["author"] }}</h5>
        {{ $horror["excerpt"] }} <a href="/horror/{{ $horror["id"] }}">baca selengkapnya</a> 
    </article>    
    @endforeach


@endsection