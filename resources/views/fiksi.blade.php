@extends('layouts.main')

@section('container')
    
    @foreach ($books as $book)
    <article class="mt-4">
    <h1>{{ $book["title"] }}</h1>
    <h5>by : {{ $book["author"] }}</h5>
    <p>
        {{ $book["body"] }} <a href="/fiksi/{{ $book["slug"] }}">baca selengkapnya</a> 
    </p>
    </article>    
    @endforeach


@endsection
