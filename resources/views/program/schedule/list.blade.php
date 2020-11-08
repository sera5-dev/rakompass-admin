<div class="form-group">
  <label>Schedule List</label>
  @if($program->schedule)
  @foreach($program->schedule as $schedule)
  <div class="form-group">
    <form action=" {{ route('programs-schedule-store',['id' => $program->id])}}" method="post">
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
          <button type="submit" class="btn btn-primary rounded-0">Edit</button>
        </div>
      </div>
    </form>
  </div>
  @endforeach
  @endif
</div>
