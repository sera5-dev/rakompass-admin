<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>List of episodes</h4>
    </div>
    <div class="card-body">
      @if($program->episode)
      <div class="table-responsive">
        <table class="table table-striped" id="table-1">
          <thead>
            <th style="width:50px">episode</th>
            <th>schedule</th>
            <th style="width:50">date</th>
            <th>link</th>
            <th>theme</th>
            <th></th>
          </thead>
          <tbody>
            @foreach($program->episode as $episode)
            <form action="{{ route('programs-episode-destroy', ['id' => $program->id]) }}" method="post">
              @csrf
              @method('delete')
              <input type="hidden" name="id" value="episode->id">
              <tr>
                <td>
                  <input class="form-control" type="number" name="episode" value="{{ $episode->episode }}" />
                </td>
                @foreach($program->schedule as $schedule)
                @if($episode->schedule_id == $schedule->id)
                <td>
                  <select class="custom-select" name="schedule_id" id="inputGroupSelect04">
                    @foreach($program->schedule as $schedule)
                    <option value="{{ $schedule->id}}">{{$days[$schedule->day-1]}} : {{ $schedule->start}} - {{ $schedule->end}}</option>
                    @endforeach
                  </select>
                </td>
                @endif
                @endforeach
                <td>
                  <input class="form-control" type="date" name="date" value="{{ $episode->date }}" />
                </td>
                <td>
                  <input class="form-control" type="text" name="link" value="{{ $episode->link }}" />
                </td>
                <td>
                  <input class="form-control" type="text" name="theme" value="{{ $episode->theme }}" />
                </td>
                <td>
                  <button type="submit" class="btn btn-primary">edit</button>
                </td>
              </tr>
            </form>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
    </div>
  </div>
</div>
