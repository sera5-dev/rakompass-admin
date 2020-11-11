<div class="col-md-12">
  <div class="card author-box card-primary">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12 col-md-6 tex-center">
          @if(property_exists($program, 'image'))
          <img alt="image" src="{{ asset($program->image) }}" class="img-fluid mx-auto d-block">
          @endif
          <div class="clearfix"></div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="">
            <div class="author-box-name">
              <a href="#">{{ $program->name}}</a>
            </div>
            <div class="author-box-job"></div>
            <div class="author-box-description">
              <p>{{ $program->description}}.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
