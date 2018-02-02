@extends('templates.pages.generic')

@section('content')

<h1>Rediger Film</h1>
<hr>

<form action="{{ url('movies', [$movie->id]) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Film Title</label>
        <input type="text" value="{{ $movie->title }}" class="form-control" id="movieTitle"  name="title">
    </div>

    <div class="form-group">
        <label for="summary">Film Summary</label>
        <input type="text" value="{{ $movie->summary }}" class="form-control" id="movieSummary" name="summary" >
    </div>

    <div class="form-group">
        <label for="language">Film Sprog</label>
        <input type="text" value="{{ $movie->language }}" class="form-control" id="movieLanguage" name="language" >
    </div>

    <div class="form-group">
        <label for="logo">Film Logo</label>
        <input type="text" value="{{ $movie->logo }}" class="form-control" id="movieLogo" name="logo" >
    </div>

    <div class="form-group">
        <label for="release">Film Release Year</label>
        <input type="number" value="{{ $movie->release }}" class="form-control" id="movieRelease" name="release" >
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

    <button type="submit" class="btn btn-primary">Rediger</button>
</form>

@endsection