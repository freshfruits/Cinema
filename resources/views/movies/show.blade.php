@extends('templates.pages.generic')

@section('content')
    <h1>{{ $movie->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Movie Title:</strong> {{ $movie->title }}<br>
            <strong>Summary:</strong> {{ $movie->summary }}<br>
            <strong>Language:</strong> {{ $movie->language }}<br>
            <strong>Logo:</strong> <img src="{{ $movie->logo }}" alt="sad"><br>
            <strong>Release Year:</strong> {{ $movie->release }}

            
        </p>
    </div>
    <a href="/movies" class="btn btn-info" role="button">Film Index</a>
@endsection