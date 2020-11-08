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
      @include('crew.contact.form')
    </div>
    <div class="row">
      @include('crew.contact.list')
    </div>
    <div class="row">
      @include('crew.social.form')
    </div>
    <div class="row">
      @include('crew.social.list')
    </div>
  </div>
  <div class="col-md-5">
    <div class="row">
      @include('crew.profile.form')
    </div>
  </div>
</div>
@endsection
