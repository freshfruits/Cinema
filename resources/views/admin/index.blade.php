@extends('admin.templates.pages.generic')

@section('content')

<div class="card">
   <div class="card-body">
        <h2>Hey {{ Auth::user()->username }}</h2>
        <hr>
        <p>Welcome back <b>{{ Auth::user()->username }}</b> ... </p>
        
        <hr>
        
        <h3>Roles / Permissions</h3>
        <a href="admin/permission">Permission Index</a> - 
        <a href="admin/role">Role Index</a> |
        <a href="admin/permission/create">Create Permission</a> -
        <a href="admin/role/create">Create Role</a> 
        
        <hr>
        
        <h3>Users</h3>
        <a href="admin/user">User Index</a> - 
        <a href="admin/user/create">Create User</a>
   </div>
</div>

@endsection