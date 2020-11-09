<div class="form-group">
  <label for="">list of contact</label>
  <div class="table-responsive">
    <table class="table table-striped" id="table-1">
      <thead>
        <th>#</th>
        <th>media</th>
        <th></th>
      </thead>
      <tbody>
        @foreach($crew->contact as $contact)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->value }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
