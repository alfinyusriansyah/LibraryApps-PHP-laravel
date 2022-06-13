@extends('layouts.main')

@section('container')
    <h1>Halaman Penulis {{ $author }}</h1>
    
    @foreach ($books as $book)

    <article class="mt-4 mb-5 border-bottom border-top" >
    <p></p>
    <h3>{{ $book->title }}</h3>
    <p></p>
        {{ $book->excerpt }} <a href="/horror/{{ $book->slug }}">baca selengkapnya</a> 
    </article>    
    @endforeach


@endsection