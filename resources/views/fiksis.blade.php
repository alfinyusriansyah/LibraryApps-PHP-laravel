@extends('layouts.main')

@section('container')
    <h1>Detail Book</h1>   
    <article class="mt-4 mb-5">
    <h3>{{ $books_fiksi->title }}</h3>
     <img src="/img/{{ $books_fiksi->img }}" alt="" width="200" class="img-thumbnail rounded border border-dark">
    <p>penulis : {{ $books_fiksi->author->name }}</p>
    {{ $books_fiksi->body }}
    </article>    

    <a href="/fiksi">back to menu</a>

@endsection