@extends('backend.partials.app')
@section('content')
<div class="container-fluid px-4">
    
    <h3 class="mt-4">Role</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Role List</li>
    </ol>
  
      <div class="card">
        <div class="card-body">
          <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th style="width: 125px;">Action</th>
                    </tr>
               </thead>
              
               <tbody>
                   
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>
                            <a title="Edit" href="{{ route('admin.roles.edit',[$role->id])}}" type="button" class="btn btn-outline-secondary btn-sm btn-icon-text">
                                  Edit
                            </a>
                            <a title="Delete" href="{{ route('admin.roles.destroy',[$role->id])}}" type="button" class="btn btn-outline-danger btn-sm btn-icon-text">
                              Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                
              </tbody>
            </table>
            {{$roles->links()}}
          </div>
        </div>
      </div>
</div>
                
@endsection

