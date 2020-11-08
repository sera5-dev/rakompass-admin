<div class="col-md-12">
  <div class="card author-box card-primary">
    <form action="{{ route('crews-store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{ $crew->id }}">
      <div class="card-header">
        <h4>Edit @yield('page')</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Avatar</label>
          <div id="image-preview" class="image-preview">
            <label for="image-upload" id="image-label">Choose File</label>
            <input type="file" name="image" id="image-upload" />
          </div>
        </div>
        <div class="form-group">
          <label>Name</label>
          <input name="name" type="text" class="form-control" required value="{{ $crew->name }}">
        </div>
        <div class="form-group">
          <label>Birth Place</label>
          <input name="name" type="text" class="form-control" required value="{{ $crew->birth_place }}">
        </div>
        <div class="form-group">
          <label>Birth Date</label>
          <input name="name" type="date" class="form-control" required value="{{ $crew->birth_date }}">
        </div>
        <div class="form-group">
          <label>Adress</label>
          <div class="input-group">
            <textarea name="description" class="form-control">{{ $crew->address }}</textarea>
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
