@extends('templates.pages.generic')
@section('content')
<div class="container">
<div class="row">
   <div class="col-md-9">
      <div class="card">
         <div class="card-header">Create New user</div>
         <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">View, Edit, Delete or Add new users</h6>
            <hr>
            <a href="{{ url('/admin/user/create') }}" class="btn btn-success btn-sm" title="Add New user">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            {!! Form::open(['method' => 'GET', 'url' => '/admin/user', 'class' => 'navbar-form ', 'role' => 'search'])  !!}
            <div class="input-group col-md-4  float-right">
               <span class="input-group-btn">
               <button class="btn btn-success" type="submit">Search!</button>
               </span>
               <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
            </div>
            {!! Form::close() !!}
            <br/>
            <br/>
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($user as $item)
                     <tr>
                        <td>{{ $loop->iteration or $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                           <a href="{{ url('/admin/user/' . $item->id) }}" title="View user"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                           <a href="{{ url('/admin/user/' . $item->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                           {!! Form::open([
                           'method'=>'DELETE',
                           'url' => ['/admin/user', $item->id],
                           'style' => 'display:inline'
                           ]) !!}
                           {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                           'type' => 'submit',
                           'class' => 'btn btn-danger btn-xs',
                           'title' => 'Delete user',
                           'onclick'=>'return confirm("Confirm delete?")'
                           )) !!}
                           {!! Form::close() !!}
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               <div class="pagination-wrapper"> {!! $user->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection