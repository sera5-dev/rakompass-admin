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
          <th>Address</th>
          <th>Birth Place</th>
          <th>Birth Date</th>
          <th style="width: 140px;"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($crews as $crew)
        <tr>
          <td class="text-center">{{ $loop->iteration}}</td>
          <td>{{ $crew->name }}</td>
          <td>{{ $crew->address }}</td>
          <td>{{ $crew->birth_place }}</td>
          <td>{{ $crew->birth_date }}</td>
          <td>
            <form action="{{ route('crews-destroy') }}" method="post">
              @csrf
              @method('delete')
              <input type="hidden" name="id" value="{{ $crew->id }}">
              <button type="submit" class="ml-1 float-right btn btn-sm btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Delete</button>
            </form>
            <a href="{{ route('crews-show', ['id' => $crew->id]) }}" class="btn btn-sm btn-primary btn-icon icon-left float-right"><i class="fas fa-external-link-alt"></i> Detail</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
