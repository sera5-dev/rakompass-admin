<div class="form-group">
  <label for="">list of social platform</label>
  <div class="table-responsive">
    <table class="table table-striped" id="table-1">
      <thead>
        <th>#</th>
        <th>media</th>
        <th></th>
      </thead>
      <tbody>
        @foreach($socials as $social)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $social->name }}</td>
          <td>
            <button class="btn btn-sm btn-danger float-right">delete</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
