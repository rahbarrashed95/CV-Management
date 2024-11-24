@extends('backend.partials.app')
@section('content')
<div class="container-fluid px-4">
    <h3 class="mt-4">Users</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Users List</li>
    </ol>
    
    <div class="card">
                <div class="card-body">
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                       </thead>
                      
                       <tbody>
                           
                           @foreach($users as $user)
                            <tr>
                              <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach($user->getRoleNames() as $role)
                                    <span class="badge bg-success">{{$role}}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('users.edit')

                                @endcan
                            </td>
                            <td>
                            @can('users.edit')
                                <a title="Edit" href="{{ route('admin.users.edit',[$user->id])}}" type="button" class="btn btn-outline-secondary btn-sm btn-icon-text">
                                  Edit
                                </a>
                            @endcan
                            @can('users.delete')
                                <a title="Delete" href="{{ route('admin.users.destroy',[$user->id])}}" type="button" class="btn btn-outline-danger btn-sm btn-icon-text">
                                  Delete
                                </a>
                            @endcan
                            </td>
                            </tr>
                            @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            
</div>

@endsection

