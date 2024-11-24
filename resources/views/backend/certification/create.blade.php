@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
    <h3 class="mt-4">Certification</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Create Certification</li>
    </ol>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create Certification</h4>
          <form class="forms-sample" action="{{route('admin.certification.store')}}" method="POST" id="ajax_form">
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
                        <strong for="name">Certification Date</strong>
                        <input type="date" id="certificate_date" class="form-control" name="certificate_date" placeholder="name..." value="">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="image">Image</strong>
                        <input type="file" id="image" class="form-control" name="image" placeholder="name...">
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

