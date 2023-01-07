<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Sherin">
  <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <title>
    @yield('title')
  </title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  @stack('css')
  @livewireStyles
</head>

<body {{session()->get('dark-only')}} @if(session()->get('dark-only') == 'dark-only') class="dark-only" @else class="" @endif @if(Route::current()->getName() == 'index') onload="startTime()" @endif>

  <x-ui.loader />
  <!-- tap on top starts-->

  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <x-layouts.header />
    <!-- Page Header Ends  -->
    <!-- Page Body Start-->

    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <x-layouts.side-bar />
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <x-layouts.bread-crumb />
        <!-- Container-fluid starts-->
        @yield('content')
        <!-- Container-fluid Ends-->
      </div>
      <x-layouts.footer />
    </div>
  </div>
  <!-- latest jquery-->



  <x-livewire-alert::scripts />
  <!-- Plugin used-->
  @livewireScripts
  <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
  <!-- SweetAlerts js-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Bootstrap js-->
  <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <!-- feather icon js-->
  <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
  <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
  <!-- scrollbar js-->
  <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
  <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
  <!-- Sidebar jquery-->
  <script src="{{asset('assets/js/config.js')}}"></script>
  <!-- Plugins JS start-->
  <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="{{asset('assets/js/script.js')}}"></script>
  <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
  <script src="{{asset('assets/js/layout-change.js')}}"></script>
  @stack('scripts')
</body>

</html>