<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Social Account</h4>
    </div>
    <div class="card-body">
      @include('crew.social.form')
      @if(property_exists($crew, 'social'))
      @include('crew.social.list')
      @endif
    </div>
  </div>
</div>
