@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
    <h3 class="mt-4">Experience</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Experience Update</li>
    </ol>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Experience Update</h4>
          <form class="forms-sample" action="{{route('admin.experience.update', $item->id)}}" method="POST" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Company Name</strong>
                        <input type="text" id="company_name" class="form-control" name="company_name" placeholder="name..." value="{{$item->company_name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Designation</strong>
                        <input type="text" id="designation" class="form-control" name="designation" placeholder="name..." value="{{$item->designation}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">GPA</strong>
                        <input type="text" id="start_date" class="form-control" name="start_date" placeholder="name..." value="{{$item->start_date}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Year</strong>
                        <input type="text" id="end_date" class="form-control" name="end_date" placeholder="name..." value="{{$item->end_date}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="description">Responsibilities</strong>
                        <textarea class="form-control" id="description" name="responsibilities">{{ $item->responsibilities }}</textarea>
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

