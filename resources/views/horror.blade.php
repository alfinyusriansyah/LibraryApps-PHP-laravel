@extends('layouts.main')

@section('container')
    <h1>List Horrors Books</h1>
    @foreach ($books_horror as $horror)
    <article class="mt-4 mb-5">
    <h3>{{ $horror->title }}</h3>
    <img src="/img/{{$horror->img }}" alt="" width="200" class="img-thumbnail rounded border border-dark">
    <p></p>
    <p>Penulis: <a href="/authorss/{{ $horror->author->slug }}">{{ $horror->author->name }}</a></p>
        {{ $horror->excerpt }} <a href="/horror/{{ $horror->slug }}">baca selengkapnya</a> 
    </article>    
    @endforeach


@endsection