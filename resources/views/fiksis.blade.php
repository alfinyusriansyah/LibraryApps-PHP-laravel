@extends('layouts.main')

@section('container')
    <h1>Detail Book</h1>   
    <article class="mt-4">
    <h3>{{ $books_fiksi->title }}</h3>
     <img src="/img/{{ $books_fiksi->img }}" alt="" width="200" class="img-thumbnail rounded border border-dark">
    <h5>{{ $books_fiksi->author }}</h5>
    {{ $books_fiksi->body }}
    </article>    

    <a href="/fiksi">back to menu</a>

@endsection