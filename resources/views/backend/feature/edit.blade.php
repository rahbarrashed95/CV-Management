<div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Feature Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{route('admin.feature.update',[$item->id])}}" method="POST" id="ajax_form">
              @csrf
              @method('PATCH')
              <div class="row">     
           

                  <div class="col-md-4 mb-2">
                      <div class="form-group">
                          <strong >{{ __('feature.Feature Title') }}</strong>
                          <input type="text" class="form-control" name="feature_title"  value="{{ $item->feature_title }}" placeholder="Enter Feature Title...">
                      </div>
                  </div>

                  <div class="col-md-12 mb-2">
                      <div class="form-group">
                          <strong > {{ __('feature.Feature Description') }} </strong>
                          <textarea class="form-control" id="feature_description" name="feature_description">{{ $item->feature_description }}</textarea>
                      </div>
                  </div> 

              </div>

              <input type="submit" value="{{ __('feature.Update') }}" class="btn btn-success">
              <hr>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">{{ __('feature.close') }}</button>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    CKEDITOR.replace('feature_description', {
        filebrowserUploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>