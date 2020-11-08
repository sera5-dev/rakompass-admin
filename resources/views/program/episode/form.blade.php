<form action=" {{ route('programs-episode-store', ['id' => $program->id])}} " method="post">
  @csrf
  <input type="hidden" name="id" value="">
  <input type="hidden" name="program_id" value="{{ $program->id}}" />
  <div class="row">
    <div class="col-md-5">
      <div class="form-group">
        <label>Select Schedule</label>
        <select class="custom-select" name="schedule_id" id="inputGroupSelect04">
          @foreach($program->schedule as $schedule)
          <option value="{{ $schedule->id}}">{{$days[$schedule->day-1]}} : {{ $schedule->start}} - {{ $schedule->end}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label>Date</label>
        <div class="input-group">
          <input name="date" type="date" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label>Episode</label>
        <input name="episode" type="number" class="form-control" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Video link</label>
        <input name="link" type="text" class="form-control" required>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Theme of episode</label>
        <input name="theme" type="text" class="form-control" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group float-right">
        <button type="submit" class="btn btn-primary">create</button>
      </div>
    </div>
  </div>
</form>
