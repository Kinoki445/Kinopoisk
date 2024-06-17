@extends('layouts.app')

@section('content')

@foreach ($kino['results'] as $key => $value)
    <div>

        <h1><a href="{{ route('film-info', $value['id']) }}">{{ $value['original_title'] }} </a></h1>
        <p>Дата выхода - {{ $value['release_date'] }}</p>
        <p>Рейтинг - {{ $value['vote_average'] }}</p>
        <p>Популярность - {{ $value['popularity'] }}</p>
        <p>Язык оригинала - {{ $value['original_language'] }}</p>
        <p>Жанры -
            @foreach ($value['genre_ids'] as $genre)
                {{ $genre }}
            @endforeach
        <p>Описание - {{ $value['overview'] }}</p>
        <p>Постер - <img src="https://image.tmdb.org/t/p/original/{{ $value['poster_path'] }}" alt="" width="200" height="300"></p>
    </div>
@endforeach

@endsection
