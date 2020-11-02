  <form action="" method="post">
    <div class="card-header">
      <h4>Create new @yield('page')</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Name of program</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Description of program (optional)</label>
        <div class="input-group">
          <textarea class="form-control"></textarea>
        </div>
      </div>
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
