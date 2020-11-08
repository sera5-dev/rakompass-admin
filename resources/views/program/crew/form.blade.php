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
