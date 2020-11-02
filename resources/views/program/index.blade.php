@extends('main')

@section('page', 'Program')

@section('program', 'active')

@section('body')
<div class="col-12">
  <div class="row">
    <div class="col-12">
      <div class="card">
        @include('program.create')
      </div>
      <div class="card">
        @include('program.list')
      </div>
    </div>
  </div>
</div>
@endsection
