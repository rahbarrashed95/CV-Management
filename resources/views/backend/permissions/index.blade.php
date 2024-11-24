@extends('backend.partials.app')
@section('content')
<div class="container-fluid px-4">
    
    
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Manage Role</h4>
          <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Permission</th>
                        <th style="width: 125px;">Action</th>
                    </tr>
               </thead>
              
               <tbody>
                   
                   @foreach($permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>
                        <td>
                            <a title="Edit" href="{{ route('admin.permissions.edit',[$permission->id])}}" type="button" class="btn btn-outline-secondary btn-icon-text">
                                  Edit
                            </a>
                            <a title="Delete" href="{{ route('admin.permissions.destroy',[$permission->id])}}" type="button" class="btn btn-outline-danger btn-icon-text">
                              Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                
              </tbody>
            </table>
            {{$permissions->links()}}
          </div>
        </div>
      </div>
    </div>
</div>
                
@endsection

