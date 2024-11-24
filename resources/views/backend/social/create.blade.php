
@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
    <h3 class="mt-4">Social</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Create Social</li>
    </ol>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create Social</h4>
          <form class="forms-sample" action="{{route('admin.social.store')}}" method="POST" id="ajax_form">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Icon</strong>
                        <input type="text" class="form-control" name="icon" value="" placeholder="Enter Icon Class...">   
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="thumbnail">Link</strong>
                        <input type="text" class="form-control" name="link" value="" placeholder="Enter Link...">
                    </div>
                </div>
            </div> 
            
            <button type="submit" class="btn btn-primary mr-2">Save</button>
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

