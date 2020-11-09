<div class="form-group">
  <label>add new contact</label>
  <form action="" method="post">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="crew_id" value="{{ $crew->id }}">
    @csrf
    <div class="input-group">
      <select class="custom-select" name="contact_id" id="inputGroupSelect05">
        @foreach($contacts as $opt)
        <option value="{{ $opt->id }}">{{ $opt->name }}</option>
        @endforeach
      </select>
      <input type="text" name="value" class="form-control" placeholder="value">
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </form>
</div>
