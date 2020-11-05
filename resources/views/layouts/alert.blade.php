<div class="alert alert-{{session('alert-class')}} alert-has-icon">
  <div class="alert-icon"><i class="far fa-{{session('alert-icon')}}"></i></div>
  <div class="alert-body">
    <div class="alert-title">{{session('alert-title')}}</div>
    {{session('alert-message')}}
  </div>
</div>
