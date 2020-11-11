<div class="col-md-12">
  <div class="card">
    <form action="{{ route('partners-store') }}" method="post" enctype="multipart/form-data">
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
              <label>Partner name</label>
              <input name="name" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address (optional)</label>
              <div class="input-group">
                <textarea name="address" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label>Description (optional)</label>
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
</div>
