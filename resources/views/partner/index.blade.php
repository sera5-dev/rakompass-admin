@extends('main')

@section('page', 'Partners')

@section('partner', 'active')

@section('body')
<div class="row">
  @include('partner.form')
  @include('partner.list')
</div>
@endsection
