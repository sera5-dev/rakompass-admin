@if(session('program-store-failed'))
<div class="alert alert-danger alert-has-icon">
  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
  <div class="alert-body">
    <div class="alert-title">Oopss</div>
    {{session('program-store-failed')}}
  </div>
</div>
@elseif(session('program-store-succeed'))
<div class="alert alert-light alert-has-icon">
  <div class="alert-icon"><i class="fas fa-check"></i></div>
  <div class="alert-body">
    <div class="alert-title">All good</div>
    {{session('program-store-succeed')}}
  </div>
</div>
@endif
<div class="card">
  <form action="{{ route('programs-store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-header">
      <h4>Create new @yield('page')</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Image of program</label>
            <div id="image-preview" class="image-preview">
              <label for="image-upload" id="image-label">Choose File</label>
              <input type="file" name="image" id="image-upload" />
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label>Name of program</label>
            <input name="name" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Description of program (optional)</label>
            <div class="input-group">
              <textarea name="description" class="form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
</div>
