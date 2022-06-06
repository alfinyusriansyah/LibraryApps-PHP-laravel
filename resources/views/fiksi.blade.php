@extends('layouts.main')

@section('container')
    <h1>List Buku Fiksi</h1>
    @foreach ($books as $book)
    <article class="mt-4">
    <p></p>
    <h3>{{ $book["title"] }}</h3>
    <img src="/img/{{ $book["img"] }}" alt="" width="200" class="img-thumbnail rounded border border-dark">
    <p></p>
    <p>
        {{ $book["body"] }} <a href="/fiksi/{{ $book["slug"] }}">baca selengkapnya</a> 
    </p>
    </article>    
    @endforeach


@endsection
