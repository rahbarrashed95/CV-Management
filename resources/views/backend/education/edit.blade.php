@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
    <h3 class="mt-4">Education</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Education Update</li>
    </ol>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Education Update</h4>
          <form class="forms-sample" action="{{route('admin.education.update', $item->id)}}" method="POST" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Education Name</strong>
                        <input type="text" id="uni_name" class="form-control" name="uni_name" placeholder="name..." value="{{$item->uni_name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Background</strong>
                        <input type="text" id="background" class="form-control" name="background" placeholder="name..." value="{{$item->background}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">GPA</strong>
                        <input type="text" id="gpa" class="form-control" name="gpa" placeholder="name..." value="{{$item->gpa}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Year</strong>
                        <input type="text" id="year" class="form-control" name="year" placeholder="name..." value="{{$item->year}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="description">Details</strong>
                        <textarea class="form-control" id="description" name="details">{{ $item->details }}</textarea>
                    </div>
                </div>
                
            </div> 
            
            <button type="submit" class="btn btn-primary mr-2">Update</button>
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

