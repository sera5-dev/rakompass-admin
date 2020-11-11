<div class="col-md-12">
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
              <th>Time</th>
              <th>Description</th>
              <th class="text-right"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($events as $event)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $event->name}}</td>
              <td>{{ $event->time}}</td>
              <td>{{ $event->description}}</td>
              <td style="width:145px">
                <button class="btn btn-sm btn-danger float-right">delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
