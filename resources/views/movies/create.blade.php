@extends('templates.pages.generic')

@section('content')
    <h1>Tilføj ny film</h1>
    <hr>
    <form action="/movies" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Movie Title</label>
        <input type="text" class="form-control" id="movieTitle"  name="title">
    </div>
    <div class="form-group">
        <label for="summary">Movie Summary</label>
        <input type="text" class="form-control" id="movieSummary" name="summary">
    </div>
    <div class="form-group">
        <label for="language">Movie Language</label>
        <input type="text" class="form-control" id="movieLanguage" name="language">
    </div>
    <div class="form-group">
        <label for="logo">Movie Logo</label>
        <input type="url" class="form-control" id="movieLogo" name="logo">
    </div>
    <div class="form-group">
        <label for="release">Movie Release Year</label>
        <input type="number" class="form-control" id="movieRelease" name="release">
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <button type="submit" class="btn btn-primary">Tilføj</button>
    </form>
@endsection