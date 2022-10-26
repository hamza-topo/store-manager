<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Sherin">
  <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <title>{{config('app.name')}}</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  @include('layouts.simple.css')
  @yield('style')
  @livewireStyles
</head>

<body {{session()->get('dark-only')}}  @if(session()->get('dark-only') == 'dark-only') class="dark-only" @else class="" @endif  @if(Route::current()->getName() == 'index') onload="startTime()" @endif>
  @if(Route::current()->getName() == 'index')
  <div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
      </filter>
    </svg>
  </div>
  @endif
  @php
    $isActive = 1
  @endphp
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('layouts.simple.header')
    <!-- Page Header Ends  -->
    <!-- Page Body Start-->

    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      @include('layouts.simple.sidebar')

      @if($isActive == 1)
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                @yield('breadcrumb-title')
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('/') }}"> <i data-feather="home"></i></a></li>
                  @yield('breadcrumb-items')
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        @yield('content')
        <!-- Container-fluid Ends-->
      </div>
      @else
      <livewire:tools.checkout />
      @endif

      <!-- footer start-->
      @include('layouts.simple.footer')

    </div>
  </div>
  <!-- latest jquery-->
  @include('layouts.simple.script')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <x-livewire-alert::scripts />
    <!-- Plugin used-->
    @livewireScripts
    <script type="text/javascript">
      if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
        $(".according-menu.other").css("display", "none");
        $(".sidebar-submenu").css("display", "block");
      }
    </script>
</body>

</html>
