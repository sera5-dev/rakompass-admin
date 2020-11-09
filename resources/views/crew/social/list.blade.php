<div class="form-group">
  <label for="">list of contact</label>
  <div class="table-responsive">
    <table class="table table-striped" id="table-1">
      <thead>
        <th>#</th>
        <th>platform</th>
        <th></th>
      </thead>
      <tbody>
        @foreach($crew->social as $social)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $social->name }}</td>
          <td>{{ $social->username }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
