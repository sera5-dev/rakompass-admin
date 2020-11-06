<div class="card author-box card-primary">
  <form action="{{ route('programs-store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $program->id }}">
    <div class="card-header">
      <h4>Edit @yield('page')</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Image of program</label>
        <div id="image-preview" class="image-preview">
          <label for="image-upload" id="image-label">Choose File</label>
          <input type="file" name="image" id="image-upload" />
        </div>
      </div>
      <div class="form-group">
        <label>Name of program</label>
        <input name="name" type="text" class="form-control" required value="{{ $program->name }}">
      </div>
      <div class="form-group">
        <label>Description of program (optional)</label>
        <div class="input-group">
          <textarea name="description" class="form-control">{{ $program->description }}</textarea>
        </div>
      </div>
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
</div>
