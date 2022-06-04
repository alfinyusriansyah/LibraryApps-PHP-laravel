@extends('layouts.main')

@section('container')
    
    @foreach ($books_horror as $horror)
    <article class="mt-4">
    <h1>{{ $horror["title"] }}</h1>
    <h5>by : {{ $horror["author"] }}</h5>
    <p>
        {{ $horror["body"] }} <a href="/fiksi/{{ $horror["slug"] }}">baca selengkapnya</a> 
    </p>
    </article>    
    @endforeach


@endsection