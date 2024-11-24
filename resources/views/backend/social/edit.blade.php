
@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
    <h3 class="mt-4">Social</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Social Update</li>
    </ol>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Social Update</h4>
          <form class="forms-sample" action="{{route('admin.social.update', $item->id)}}" method="POST" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="name">Icon</strong>
                        <input type="text" class="form-control" name="icon" value="{{ $item->icon }}" placeholder="Enter Icon Class...">   
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <strong for="thumbnail">Link</strong>
                        <input type="text" class="form-control" name="link" value="{{ $item->link }}" placeholder="Enter Link...">
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
