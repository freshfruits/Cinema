@extends('admin.templates.pages.generic')

@section('content')

<div class="card">
  <div class="card-body">
    Velkommen tilbage {{ Auth::user()->username }} .. Admin page
  </div>
</div>

@endsection