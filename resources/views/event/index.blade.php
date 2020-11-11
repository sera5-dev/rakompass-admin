@extends('main')

@section('page', 'Events')

@section('event', 'active')

@section('body')
<div class="col-12">
  <div class="row">
    @include('event.form')
  </div>
  <div class="row">
    @include('event.list')
  </div>
</div>
@endsection
