@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
    <h3 class="mt-4">Services</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Add Services</li>
    </ol>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Service</h4>
          <form class="forms-sample" action="{{route('admin.services.store')}}" method="POST" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Title</strong>
                        <input type="text" id="title" class="form-control" name="title" placeholder="name..." value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="description">Description</strong>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
                
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <strong >{{ __('service.Icon') }}</strong>
                        <input type="file" class="form-control" name="icon">
                    </div>
                </div>
            </div> 
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</main>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
                
@endsection