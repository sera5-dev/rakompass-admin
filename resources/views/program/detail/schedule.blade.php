<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Schedules</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Create new schedule</label>
        <form action=" {{ route('programs-schedule-store',['id' => $program->id])}}" method="post">
          <input type="hidden" name="program_id" value="{{ $program->id }}">
          @csrf
          <div class="input-group">
            <select class="custom-select" name="day" id="inputGroupSelect05">
              <option value="1">Senin</option>
              <option value="2">Selasa</option>
              <option value="3">Rabu</option>
              <option value="4">Kamis</option>
              <option value="5">Jumat</option>
              <option value="6">Sabtu</option>
              <option value="7">Minggu</option>
            </select>
            <input type="time" name="start" id="start" class="form-control">
            <input type="time" name="end" id="end" class="form-control">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </div>
        </form>
      </div>
      <div class="form-group">
        <label>Schedule List</label>
        <form action="" method="post">
          @csrf
          <div class="input-group">
            <input type="hidden" name="program_id" value="{{ $program->id}}">
            <select class="custom-select" name="crew_id" id="inputGroupSelect05">
              <option value="1">Senin</option>
              <option value="2">Selasa</option>
              <option value="3">Rabu</option>
              <option value="4">Kamis</option>
              <option value="5">Jumat</option>
              <option value="6">Sabtu</option>
              <option value="7">Minggu</option>
            </select>
            <input type="time" name="start" id="start" value="" class="form-control">
            <input type="time" name="end" id="end" value="" class="form-control">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
