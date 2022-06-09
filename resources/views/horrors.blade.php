@extends('layouts.main')

@section('container')
    <article class="mt-4">
        <h1>Detail Books Horrors</h1>
        <p class="mt-4"></p>
        <h2>{{ $book_horror['title'] }}</h2>
        <img src="/img/{{$book_horror['img'] }}" alt="" width="200" class="img-thumbnail rounded border border-dark">
        <h5>by :{{ $book_horror['author'] }}</h5>
        {{ $book_horror['body'] }}
    </article>

    <a href="/horror">back to menu</a>
@endsection