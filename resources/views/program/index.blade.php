@extends('main')

@section('page', 'Program')

@section('program', 'active')

@section('body')
<div class="col-12">
  <div class="row">
    <div class="col-12">
      @if(session('program-store-failed'))
      <div class="alert alert-danger alert-has-icon">
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        <div class="alert-body">
          <div class="alert-title">Oopss</div>
          {{session('program-store-failed')}}
        </div>
      </div>
      @elseif(session('program-store-succeed'))
      <div class="alert alert-primary alert-has-icon">
        <div class="alert-icon"><i class="fas fa-check"></i></div>
        <div class="alert-body">
          <div class="alert-title">All good</div>
          {{session('program-store-succeed')}}
        </div>
      </div>
      @endif
      <div class="card">
        @include('program.create')
      </div>
      @if(session('program-changes-failed'))
      <div class="alert alert-danger alert-has-icon">
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        <div class="alert-body">
          <div class="alert-title">Oopss</div>
          {{session('program-changes-failed')}}
        </div>
      </div>
      @elseif(session('program-changes-succeed'))
      <div class="alert alert-primary alert-has-icon">
        <div class="alert-icon"><i class="fas fa-check"></i></div>
        <div class="alert-body">
          <div class="alert-title">All good</div>
          {{session('program-changes-succeed')}}
        </div>
      </div>
      @endif
      <div class="card">
        @include('program.list')
      </div>
    </div>
  </div>
</div>
@endsection
