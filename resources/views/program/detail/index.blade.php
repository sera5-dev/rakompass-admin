@extends('main')

@section('page', 'Program')

@section('program', 'active')

@section('body')
<div class="row">
  <div class="col-md-7">
    <div class="row">
      @include('program.detail.profile')
    </div>
    <div class="row">
    </div>
    <div class="row">
      @include('program.detail.schedule')
    </div>
  </div>
  <div class="col-md-5">
    <div class="row">
      @include('program.detail.edit')
    </div>
    <div class="row">
      @include('program.detail.crew')
    </div>
  </div>
</div>
@endsection
