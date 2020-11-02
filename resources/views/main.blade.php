<!DOCTYPE html>
<html lang="id">
@include('layouts.head')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('layouts.navbar')
      @include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('page')</h1>
            <div class="section-header-breadcrumb">
              @yield('main-crumb')
              @yield('sub-crumb')
            </div>
          </div>
          <div class="section-body">
            @yield('body')
          </div>
        </section>
      </div>
    </div>
  </div>

  @include('layouts.footer')
  @include('layouts.foot')
</body>

</html>
