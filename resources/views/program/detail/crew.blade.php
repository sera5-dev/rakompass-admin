<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Casters</h4>
    </div>
    <div class="card-body">
      @csrf
      @if(!empty($options))
      <div class="form-group">
        <label>Add Caster</label>
        <form action="{{ route('programs-crew-store', ['id' => $program->id]) }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <div class="input-group">
              <select class="custom-select" name="crew_id" id="inputGroupSelect04">
                @foreach($options as $opt)
                <option value="{{ $opt->id}}">{{ $opt->name}}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      @endif
      @if($crews)
      <div class="form-group">
        <label>Caster List</label>
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th>Nama</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($crews as $crew)
              <tr>
                <td><a href="">{{ $crew->name }}</a></td>
                <td>
                  <form action=" {{ route('programs-crew-destroy', ['id' => $program->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="crew_id" value="{{ $crew->id}}">
                    <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
