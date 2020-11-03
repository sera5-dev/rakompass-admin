<div class="card-header">
  <h4>List of @yield('page')</h4>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-striped" id="table-1">
      <thead>
        <tr>
          <th class="text-center"> # </th>
          <th>Name</th>
          <th>Address</th>
          <th>Birth Place</th>
          <th>Birth Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($crews as $crew)
        <tr>
          <td class="text-center">{{ $loop->iteration}}</td>
          <td>{{ $crew->name }}</td>
          <td>{{ $crew->address }}</td>
          <td>{{ $crew->name }}</td>
          <td>{{ $crew->name }}</td>
          <td>
            <a href="#" class="btn btn-secondary">Schedule</a>
            <a href="#" class="btn btn-secondary">Crew</a>
            <a href="#" class="btn btn-secondary">Detail</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
