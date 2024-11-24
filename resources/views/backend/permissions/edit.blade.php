@extends('backend.partials.app')
@section('content')
<main>
    
<div class="container-fluid px-4">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Permission Update</h4>
          <form action="{{route('admin.permissions.update', $permission->id)}}" method="POST" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
    
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Name</strong>
                        <input type="text" id="name" class="form-control" name="name" placeholder="name..." value="{{$permission->name}}">
                    </div>
                </div>
                
            </div> 
            
            <button type="submit" class="btn btn-primary mr-2">Update</button>
          </form>
        </div>
      </div>

    </div>
</main>
                
@endsection

