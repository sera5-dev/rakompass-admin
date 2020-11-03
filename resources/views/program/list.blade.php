<div class="card-header">
  <h4>List of @yield('page')</h4>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-striped" id="table-1">
      <thead>
        <tr>
          <th class="text-center">#</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($program as $program)
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>{{ $program->name}}</td>
          <td>{{ $program->description}}</td>
          <td>
            <a href="#" class="btn btn-sm btn-light">Schedule</a>
            <a href="#" class="btn btn-sm btn-info">Crew</a>
            <a href="#" class="btn btn-sm btn-primary">Detail</a>
            <form action="{{ route('program-destroy') }}" method="post">
              @csrf
              @method('delete')
              <input type="hidden" name="id" value="{{ $program->id }}">
              <button type="submit" class="btn btn-sm btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
