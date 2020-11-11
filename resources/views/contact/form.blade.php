<div class="form-group">
  <label>add new contact</label>
  <form action="" method="post">
    @csrf
    <div class="input-group">
      <input type="text" name="name" class="form-control" placeholder="type of contact">
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </form>
</div>
