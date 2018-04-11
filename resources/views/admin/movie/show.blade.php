@extends('templates.pages.generic')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Movie {{ $movie->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/movie') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/movie/' . $movie->id . '/edit') }}" title="Edit Movie"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/movie', $movie->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Movie',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $movie->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $movie->title }} </td></tr>
                                    <tr><th> Summary </th><td> {{ $movie->summary }} </td></tr>
                                    <tr><th> Language </th>   <td><img src="{{ $movie->logo }}" width="auto" height="100" alt="{{$movie->title}}"></td></tr>
                                    <tr><th> Release Year </th><td>{{ $movie->release }}</td></tr>
                                    <tr><th> Created at </th><td>{{ $movie->created_at->toFormattedDateString() }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
