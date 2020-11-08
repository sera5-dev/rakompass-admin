@if(session('program-changes-failed'))
<div class="alert alert-danger alert-has-icon">
  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
  <div class="alert-body">
    <div class="alert-title">Oopss</div>
    {{session('program-changes-failed')}}
  </div>
</div>
@elseif(session('program-changes-succeed'))
<div class="alert alert-primary alert-has-icon">
  <div class="alert-icon"><i class="fas fa-check"></i></div>
  <div class="alert-body">
    <div class="alert-title">All good</div>
    {{session('program-changes-succeed')}}
  </div>
</div>
@endif
<div class="card">
  <div class="card-header">
    <h4>List of @yield('page')</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped" id="table-1">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th class="text-right"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($program as $program)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $program->name}}</td>
            <td>{{ $program->description}}</td>
            <td style="width:145px">
              <form action="{{ route('programs-destroy') }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{ $program->id }}">
                <button type="submit" class="ml-1 float-right btn btn-sm btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Delete</button>
              </form>
              <a href="{{ route('programs-show', ['id' => $program->id]) }}" class="btn btn-sm btn-primary btn-icon icon-left float-right"><i class="fas fa-external-link-alt"></i> Detail</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
