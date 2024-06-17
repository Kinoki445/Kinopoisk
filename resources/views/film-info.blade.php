@extends('layouts.app')

@section('content')

<div class="container">
    <div class="main">
        <h1>Название {{ $kino['title'] }}</h1>
        <h3>{{ $kino['tagline'] }}</h3>
        <h4>Статус - {{ $kino['status'] }}</h4>
        <p>Постер - <img src="https://image.tmdb.org/t/p/original/{{ $kino['poster_path'] }}" alt="" width="200" height="300"></p>
        <h4>Обзор</h4>
        <p>{{ $kino['overview'] }}</p>
        <h4>Жанры</h4>
        <ul>
            @foreach ($kino['genres'] as $genre)
                <li>{{ $genre['name'] }}</li>
            @endforeach
        </ul>
        <h4>Дата релиза</h4>
        <p>{{ $kino['release_date'] }}</p>
        <h4>Время фильма</h4>
        <p>{{ $kino['runtime'] }} Минут</p>
        <h4>Компании</h4>
        <ul>
            @foreach ($kino['production_companies'] as $company)
            <img src="https://image.tmdb.org/t/p/original/{{ $company['logo_path'] }}" alt="{{ $company['name'] }}" class="img-fluid" width="300" height="50">
                <li>Название - {{ $company['name'] }}</li>
                <li>Страна - {{ $company['origin_country'] }}</li>
            @endforeach
        </ul>
    </div>

    @if(isset($recomend['results']))
        <div class="recomendation">
            <h1>РЕКОМЕНДАЦИИ</h1>
            @foreach ($recomend['results'] as $key => $value)
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
                    </p>
                    <p>Описание - {{ $value['overview'] }}</p>
                    <p>Постер - <img src="https://image.tmdb.org/t/p/original/{{ $value['poster_path'] }}" alt="" width="200" height="300"></p>
                </div>
            @endforeach
        </div>
    @endif
    </div>
</div>

@endsection
