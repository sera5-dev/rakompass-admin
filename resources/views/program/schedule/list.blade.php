<div class="form-group">
  <label>Schedule List</label>
  @if($program->schedule)
  @foreach($program->schedule as $schedule)
  <form action="{{ route('programs-schedule-destroy', ['id' => $program->id]) }}" method="post" id="delete">
    @csrf
    @method('delete')
    <input type="hidden" name="id" value="{{ $schedule->id }}">
  </form>
  <div class="form-group">
    <form action=" {{ route('programs-schedule-store',['id' => $program->id])}}" method="post" id="update">
      @csrf
      <div class="input-group">
        <input type="hidden" name="id" value="{{ $schedule->id}}">
        <input type="hidden" name="program_id" value="{{ $program->id}}">
        <select class="custom-select" name="day" id="inputGroupSelect05">
          @foreach($days as $day)
          @if($loop->iteration == $schedule->day)
          <option value="{{ $loop->iteration }}" selected>{{ $day }}</option>
          @else
          <option value="{{ $loop->iteration }}">{{ $day }}</option>
          @endif
          @endforeach
        </select>
        <input type="time" name="start" value="{{ $schedule->start }}" class="form-control">
        <input type="time" name="end" value="{{ $schedule->end }}" class="form-control">
        <div class="input-group-append">
          <button form="update" type="submit" class="btn btn-primary rounded-0">Update</button>
          <button form="delete" type="submit" class="btn btn-danger rounded-0">Delete</button>
        </div>
    </form>
  </div>
</div>
@endforeach
@endif
</div>
