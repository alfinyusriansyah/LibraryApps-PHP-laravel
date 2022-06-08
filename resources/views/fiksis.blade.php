@extends('layouts.main')

@section('container')
    <h1>Detail Book</h1>   
    <article class="mt-4">
    <h3>{{ $books_fiksi->title }}</h3>
    <h5>{{ $books_fiksi->author }}</h5>
    {{ $books_fiksi->body }}
    </article>    

    <a href="/fiksi">back to menu</a>

@endsection