@extends('main')

@section('page', 'Social and Contacts')

@section('contact', 'active')

@section('body')
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-header">
        <h4>Contacts</h4>
      </div>
      <div class="card-body">
        @include('contact.form')
        @if($contacts)
        @include('contact.list')
        @endif
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card">
      <div class="card-header">
        <h4>Socials</h4>
      </div>
      <div class="card-body">
        @include('social.form')
        @if($socials)
        @include('social.list')
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
