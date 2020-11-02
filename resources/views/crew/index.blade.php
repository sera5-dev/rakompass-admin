@extends('main')

@section('page', 'Crew')

@section('crew', 'active')

@section('body')
<div class="col-12">
  <div class="row">
    <div class="col-12">
      <div class="card">
        @include('creo.create')
      </div>
      <div class="card">
        @include('crew.list')
      </div>
    </div>
  </div>
</div>
@endsection
