@extends('main')

@section('page', 'Crew')

@section('crew', 'active')

@section('body')
<div class="row">
  <div class="col-md-7">
    <div class="row">
      @include('crew.profile.index')
    </div>
    <div class="row">
      @include('crew.contact.index')
    </div>
    <div class="row">
      @include('crew.social.index')
    </div>
  </div>
  <div class="col-md-5">
    <div class="row">
      @include('crew.profile.form')
    </div>
  </div>
</div>
@endsection
