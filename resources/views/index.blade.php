@extends('templates.pages.generic')
@section('content')
@if (Auth::check())
<div class="card">
   <div class="card-body">
        <h2>Hey {{ Auth::user()->username }}</h2>
        <hr>
        <p>We hope you have a great time here and get to watch a lot of awesome movies!</p>
   </div>
</div>
@else 
<div class="card">
    <div class="card-body">
        <h2>Welcome Guest</h2>
        <hr>
        <p>Please <a href="{{ route('login') }}">login</a> to see all the awesome movies!</p>
</div>
@endif
@endsection