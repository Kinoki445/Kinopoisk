@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $kino['title'] }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://image.tmdb.org/t/p/original/{{ $kino['poster_path'] }}" alt="{{ $kino['title'] }}" class="img-fluid" width="300" height="500">
                        </div>
                        <div class="col-md-8">
                            <h4>Overview</h4>
                            <p>{{ $kino['overview'] }}</p>
                            <h4>Genres</h4>
                            <ul>
                                @foreach ($kino['genres'] as $genre)
                                    <li>{{ $genre['name'] }}</li>
                                @endforeach
                            </ul>
                            <h4>Release Date</h4>
                            <p>{{ $kino['release_date'] }}</p>
                            <h4>Runtime</h4>
                            <p>{{ $kino['runtime'] }} minutes</p>
                            <h4>Production Companies</h4>
                            <ul>
                                @foreach ($kino['production_companies'] as $company)
                                    <li>{{ $company['name'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
