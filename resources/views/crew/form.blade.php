<form action="{{ route('crews-store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-header">
    <h4>Create New @yield('page')</h4>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Crew profile image (optional)</label>
          <div id="image-preview" class="image-preview">
            <label for="image-upload" id="image-label">Choose File</label>
            <input type="file" name="image" id="image-upload" />
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Birthplace (optional)</label>
          <input type="text" name="birth_place" class="form-control">
        </div>
        <div class="form-group">
          <label>Birthdate (optional)</label>
          <input type="date" name="birth_date" class="form-control">
        </div>
        <div class="form-group">
          <label>Adress (optional)</label>
          <textarea name="address" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer text-right">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form>
