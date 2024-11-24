@extends('backend.partials.app')
@section('content')
<div class="container-fluid px-4">
    <h3 class="mt-4">Services</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Service List</li>
    </ol>
    
    <div class="card">
        
                <div class="card-header" style="background: none;">
                    <a title="Edit" href="{{ route('admin.services.create')}}" type="button" class="btn btn-outline-secondary btn-sm btn-icon-text">
                      Add Service
                    </a>
                </div>
        
                <div class="card-body">
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>{{ __('service.Title') }}</th>                                
                            <th>{{ __('service.Thumbnail') }}</th> 
                            <th style="width: 125px;">Action</th>
                        </tr>
                       </thead>
                      
                       <tbody>
                           
                           @foreach($items as $item)
                            <tr>
                                                                              
                                <td> {{$item->title}}</td>                                        
                                <td>
                                    <img src="{{ asset('backend/service/'. $item->icon) }}" width="80">
                                </td>       
                                <td>
                                    
                                    <a title="Edit" href="{{ route('admin.services.edit',[$item->id])}}" type="button" class="btn btn-outline-secondary btn-sm btn-icon-text">
                                      Edit
                                    </a>
                                    
                                    <a title="Delete" href="{{ route('admin.services.destroy',[$item->id])}}" type="button" class="delete btn btn-outline-danger btn-sm btn-icon-text">
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

@endsection

