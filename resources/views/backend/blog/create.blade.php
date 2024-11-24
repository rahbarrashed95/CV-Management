
@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
    <h3 class="mt-4">Blog</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Create Blog</li>
    </ol>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Blog Update</h4>
          <form class="forms-sample" action="{{route('admin.blogs.store')}}" method="POST" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Title</strong>
                        <input type="text" id="title" class="form-control" name="title" placeholder="name..." value="">
                        <input type="hidden" id="slug" class="form-control" name="slug" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Description</strong>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="thumbnail">Thumbnail</strong>
                        <input type="file" id="thumbnail" class="form-control" name="thumbnail">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="big_thumbnail">Big Thumbnail</strong>
                        <input type="file" id="big_thumbnail" class="form-control" name="big_thumbnail">
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


  <script type="text/javascript">
  
    $("#title").on("focusout",function(e){
                $("#slug").val(convertToSlug($(this).val()));
            });

    function convertToSlug(Text){
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-');
    }
  
    CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>