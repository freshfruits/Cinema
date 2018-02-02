@extends('templates.pages.generic')

@section('content')
    @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Movie Title</th>
                <th scope="col">Movie Summary</th>
                <th scope="col">Movie Language</th>
                <th scope="col">Movie Logo</th>
                <th scope="col">Movie Release Year</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <th scope="row">{{ $movie->id }}</th>
                <td><a href="/movies/{{ $movie->id }}">{{$movie->title}}</a></td>
                <td>{{$movie->summary}}</td>
                <td>{{$movie->language}}</td>
                <td><img src="{{ $movie->logo }}" alt="{{$movie->title}}"></td>
                <td>{{$movie->release}}</td>
                <td>{{$movie->created_at->toFormattedDateString()}}</td>
                <td>

                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('movies/' . $movie->id . '/edit') }}">
                   <button type="button" class="btn btn-warning">Edit</button>
                  </a>&nbsp;
                  <form action="{{url('movies', [$movie->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="Delete"/>
   				  </form>
              </div>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/movies/create" class="btn btn-info" role="button">Tilføj Film</a>
@endsection