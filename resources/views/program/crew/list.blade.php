@if($program->crew)
<div class="form-group">
  <label>Caster List</label>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($program->crew as $crew)
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
