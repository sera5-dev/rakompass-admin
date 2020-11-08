<?php $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu', 'Minggu']; ?>
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h4>Schedules</h4>
    </div>
    <div class="card-body">
      @include('program.schedule.form')
      @include('program.schedule.list')
    </div>
  </div>
</div>
