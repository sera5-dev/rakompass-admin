<div class="col-md-12">
  <div class="card author-box card-primary">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12 col-md-6 tex-center">
          <img alt="image" src="{{ asset($crew->avatar) }}" class="img-fluid mx-auto d-block">
          <div class="clearfix"></div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="">
            <div class="author-box-name">
              <a href="#">{{ $crew->name }}</a>
            </div>
            <div class="author-box-job">
              <p>{{ $crew->birth_place}}, {{ $crew->birth_date }}</p>
            </div>
            <div class="author-box-description">
              <p>{{ $crew->address}}.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
