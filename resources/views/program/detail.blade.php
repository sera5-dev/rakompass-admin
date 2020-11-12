@extends('main')

@section('page', 'Program')

@section('program', 'active')

@section('body')
<?php $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu', 'Minggu']; ?>
<div class="row">
  <div class="col-md-7">
    <div class="row">
      @include('program.profile.index')
    </div>
    <div class="row">
    </div>
    <div class="row">
      @include('program.schedule.index')
    </div>
    <div class="row">
      @include('program.episode.index')
    </div>
  </div>
  <div class="col-md-5">
    <div class="row">
      @include('program.profile.form')
    </div>
    <div class="row">
      @include('program.crew.index')
    </div>
  </div>
</div>
<div class="row">
  @include('program.episode.list')
</div>
@endsection
