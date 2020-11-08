@extends('main')

@section('page', 'Program')

@section('program', 'active')

@section('body')
<div class="col-12">
  <div class="row">
    <div class="col-12">
      @include('program.form')
      @include('program.list')
    </div>
  </div>
</div>
@endsection
