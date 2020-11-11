<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="">RKP</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="@yield('dashboard')"><a class="nav-link" href=""><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
      <li class="menu-header">Pages</li>
      <li class="@yield('program')"> <a href="" class=" nav-link"><i class="fas fa-broadcast-tower"></i> <span>Program</span></a> </li>
      <li class="@yield('crew')"> <a href="" class=" nav-link"><i class="fas fa-users"></i> <span>Crew</span></a> </li>
      <li class="@yield('event')"> <a href="" class=" nav-link"><i class="fas fa-calendar"></i> <span>Event</span></a> </li>
      <li class="@yield('partner')"> <a href="" class=" nav-link"><i class="fas fa-ad"></i> <span>Partner</span></a> </li>
      <li class="@yield('contact')"> <a href="" class=" nav-link"><i class="fas fa-address-card"></i> <span>Social & Contact</span></a> </li>
      <li class="@yield('about')"> <a href="" class=" nav-link"><i class="fas fa-user-cog"></i> <span>About</span></a> </li>
  </aside>
</div>
