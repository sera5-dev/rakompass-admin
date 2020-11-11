<div class="col-md-12">
  <div class="card author-box card-primary">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12 col-md-6 tex-center">
          @if(property_exists($crew, 'avatar'))
          <img alt="image" src="{{ asset($crew->avatar) }}" class="img-fluid mx-auto d-block" />
          @endif
          <div class="clearfix"></div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="author-box-name">
            @if(property_exists($crew, 'name'))
            <a href="#">{{ $crew->name }}</a>
            @endif
          </div>
          <div class="author-box-job">
            @if(property_exists($crew, 'birth_place'))
            @if(property_exists($crew, 'birth_date'))
            <p>{{ $crew->birth_place}}, {{ $crew->birth_date }}</p>
            @endif
            @endif
          </div>
          <div class="author-box-description">
            @if(property_exists($crew, 'address'))
            <p>{{ $crew->address}}.</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
