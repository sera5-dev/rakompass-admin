<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Casters</h4>
    </div>
    <div class="card-body">
      @csrf
      <div class="form-group">
        <label>Add Caster</label>
        <form action="{{ route('programs-store') }}" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-9">
              <select class="form-control">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
            <div class="col-md-3">
              <div class="text-right">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      @if($crews)
      <div class="form-group">
        <label>Crew List</label>
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($crews as $crew)
              <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $crew->name }}</td>
                <td>
                  <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
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
