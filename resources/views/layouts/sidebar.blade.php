<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">RKP</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="@yield('dasboard')"><a class="nav-link" href="blank.html"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
      <li class="menu-header">Pages</li>
      <li class="@yield('program')"> <a href="{{ route('program') }}" class=" nav-link"><i class="fas fa-video"></i> <span>Program</span></a> </li>
      <li class="@yield('crew')"> <a href="{{ route('crew') }}" class=" nav-link"><i class="fas fa-users"></i> <span>Crew</span></a> </li>
  </aside>
</div>
