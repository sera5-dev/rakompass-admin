<form action="" method="post">
  <div class="card-header">
    <h4>Create New @yield('page')</h4>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Birthplace (optional)</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>Birthdate (optional)</label>
      <input type="date" class="form-control">
    </div>
    <div class="form-group">
      <label>Adress (optional)</label>
      <textarea class="form-control"></textarea>
    </div>
  </div>
  <div class="card-footer text-right">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form>
