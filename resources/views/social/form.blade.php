<div class="form-group">
  <label>add new social platform</label>
  <form action="" method="post">
    @csrf
    <div class="input-group">
      <input type="text" name="name" class="form-control" placeholder="name of social platform">
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </form>
</div>
