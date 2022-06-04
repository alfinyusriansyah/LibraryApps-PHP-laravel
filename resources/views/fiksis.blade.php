@extends('layouts.main')

@section('container')

    <article class="mt-4">
    <h1>{{ $books_fiksi["title"] }}</h1>
    <h5>{{ $books_fiksi["author"] }}</h5>
    <p>{{ $books_fiksi["body"] }}</p>
    </article>    

    <a href="/fiksi">back to menu</a>

@endsection