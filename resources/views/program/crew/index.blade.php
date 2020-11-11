<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Casters</h4>
    </div>
    <div class="card-body">
      @include('program.crew.form')
      @if(property_exists($program, 'crew'))
      @include('program.crew.list')
      @endif
    </div>
  </div>
</div>
