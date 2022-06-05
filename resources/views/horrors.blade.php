@extends('layouts.main')

@section('container')
    <article class="mt-4">
        <h1>Detail Books Horrors</h1>
        <p class="mt-4"></p>
        <h2>{{ $book_horror['title'] }}</h2>
        <h5>by :{{ $book_horror['author'] }}</h5>
        <p>{{ $book_horror['body'] }}</p>
    </article>

    <a href="/horror">back to menu</a>
@endsection