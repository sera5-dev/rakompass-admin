<div class="form-group">
  <label>Create new schedule</label>
  <form action=" {{ route('programs-schedule-store',['id' => $program->id])}}" method="post">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="program_id" value="{{ $program->id }}">
    @csrf
    <div class="input-group">
      <select class="custom-select" name="day" id="inputGroupSelect05">
        @foreach($days as $day)
        <option value="{{ $loop->iteration }}">{{ $day }}</option>
        @endforeach
      </select>
      <input type="time" name="start" id="start" class="form-control">
      <input type="time" name="end" id="end" class="form-control">
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </form>
</div>
