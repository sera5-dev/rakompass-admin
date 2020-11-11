<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Add new Contact</h4>
    </div>
    <div class="card-body">
      @include('crew.contact.form')
      @if(property_exists($crew, 'contact'))
      @include('crew.contact.list')
      @endif
    </div>
  </div>
</div>
