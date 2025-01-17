<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI-BIMKOKO</title>
  <link rel="shortcut icon" type="image/png" href="{{url('/assets')}}/images/logos/apple-icon.png" />
  <link rel="stylesheet" href="{{url('/assets')}}/css/styles.min.css" />

</head>

<body style="background-color: #C3D7E2">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="border-radius: 30%" style="background-color: #434343">
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="" class="text-nowrap logo-img">
            <img src="{{url('/assets')}}/images/logos/apple-icon.png" width="140" alt="" style="margin-left: 25%; margin-top: 30px"/>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        @include('template.pages.sidebar')
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('template.pages.header')
      <!--  Header End -->
      <div class="container-fluid">
        @yield('content')
        @include('template.pages.footer')
      </div>
    </div>
  </div>
  @include('template.component.style_js')
</body>
</html>
