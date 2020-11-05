<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Schedules</h4>
    </div>
    <form action="{{ route('programs-store') }}" method="post" enctype="multipart/form-data">
      <div class="card-body">
        @csrf
        <div class="form-group">
          <label>Add Caster</label>
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
        </div>
        <div class="form-group">
          <form action="{{ route('programs-store') }}" method="post" enctype="multipart/form-data">
            <label>Crew List</label>
            <table class="table">
              <thead>
                <th>#</th>
                <th>Nama</th>
                <th></th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Anjing</td>
                  <td>
                    <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </form>
  </div>
</div>
