@extends('backend.partials.app')
@section('content')
<div class="container-fluid px-4">
    <h3 class="mt-4">Social</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Social List</li>
    </ol>
    
    <div class="card">
    <div class="card-header" style="background: none;">
        <a title="Edit" href="{{ route('admin.social.create')}}" type="button" class="btn btn-outline-secondary btn-sm btn-icon-text">
          Add Social
        </a>
    </div>      
    <div class="card-body">
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Link</th>                    
                <th style="width: 125px;">Action</th>
            </tr>
           </thead>
          
           <tbody>
               
               @foreach($items as $item)
                <tr>
                                                                  
                    <td> {{$item->link}}</td>                           
                    <td>
                        
                        <a title="Edit" href="{{ route('admin.social.edit',[$item->id])}}" type="button" class="btn btn-outline-secondary btn-sm btn-icon-text">
                          Edit
                        </a>
                        
                        <a title="Delete" href="{{ route('admin.social.destroy',[$item->id])}}" type="button" class="delete btn btn-outline-danger btn-sm btn-icon-text">
                          Delete
                        </a>
                        
                    </td>

                </tr>
                @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
            
</div>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

@endsection