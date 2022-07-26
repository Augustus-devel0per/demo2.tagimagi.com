<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{setting()->website_name ?? ''}} - Dashboard</title> 
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  {{-- <meta name="description" content=""> --}}
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"> --}}
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

  <!-- Icon fonts -->
<link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/fonts/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/fonts/ionicons.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/fonts/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/fonts/open-iconic.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/fonts/pe-icon-7-stroke.css')}}">

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/css/rtl/bootstrap-material.css')}}" class="theme-settings-bootstrap-css">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/css/rtl/appwork-material.css')}}" class="theme-settings-appwork-css">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/css/rtl/theme-corporate.css')}}" class="theme-settings-theme-css">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/css/rtl/colors-material.css')}}" class="theme-settings-colors-css">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/css/rtl/uikit.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/css/demo.css')}}">

  <!-- Load polyfills -->
  <script src="{{asset('public/admin-template/assets/vendor/js/polyfills.js')}}"></script>
  <script>document['documentMode']===10&&document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script>

  <script src="{{asset('public/admin-template/assets/vendor/js/material-ripple.js')}}"></script>
  <script src="{{asset('public/admin-template/assets/vendor/js/layout-helpers.js')}}"></script>
  <!-- Core scripts -->
  <script src="{{asset('public/admin-template/assets/vendor/js/pace.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Libs -->
  <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}">

   <link rel="stylesheet" href="{{asset('public/admin-template/assets/vendor/libs/toastr/toastr.css')}}">

  @yield('css')
  @yield(' custom-css')


  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
<style>
  .list-group-item {
      display: flex;
      align-items: center;
  }

  .highlight {
      background: #f7e7d3;
      min-height: 30px;
      list-style-type: none;
  }

  .handle {
      min-width: 18px;
      width: 40px;
      background: #607D8B;
      height: 15px;
      display: inline-block;
      cursor: move;
      margin-right: 10px;
  }
</style>
 

</head>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2">
    <div class="layout-inner">

      <!-- Layout sidenav -->
      <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

        <!-- Brand demo (see assets/css/demo/demo.css) -->
        <br>
        <div class="text-center" style="padding: 12px">
          <a href="{{ url('/home') }}">
            <img src="{{asset('public/images/logo/'. setting()->logo ?? 'No logo')}}" width="50" height="50" alt="">
          </a>
        </div>

        <br>
        
        <div class="sidenav-divider mt-0"></div>

        <!-- Links -->
        @include('layouts.admin.includes.sidebar')
        
      </div>
      <!-- / Layout sidenav -->

      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->

        @include('layouts.admin.includes.topbar')

        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

          <!-- Content -->
          <div class="container-fluid flex-grow-1 container-p-y">

            {{-- <h4 class="font-weight-bold py-3 mb-4">
              Dashboard
              <div class="text-muted text-tiny mt-1"><small class="font-weight-normal">Today is Tuesday, 8 February 2018</small></div>
            </h4> --}}
            <div class="default-style">
              @yield('content')
            </div>

          </div>
          <!-- / Content -->

          <!-- Layout footer -->
          @include('layouts.admin.includes.footer')


          <!-- / Layout footer -->

        </div>
        <!-- Layout content -->

      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->
  <script src="{{asset('public/admin-template/assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{asset('public/admin-template/assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('public/admin-template/assets/vendor/js/sidenav.js')}}"></script>

  <!-- Libs -->
  <script src="{{asset('public/admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('public/admin-template/assets/vendor/libs/chartjs/chartjs.js')}}"></script>

  <!-- Demo -->
  <script src="{{asset('public/admin-template/assets/js/demo.js')}}"></script>
  {{-- <script src="{{asset('public/admin-template/assets/js/dashboards_dashboard-1.js')}}"></script> --}}

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="{{asset('public/admin-template/assets/vendor/libs/toastr/toastr.js')}}"></script>

  <!-- Demo -->
  <script src="{{asset('public/admin-template/assets/js/demo.js')}}"></script>
  <script src="{{asset('public/admin-template/assets/js/ui_notifications.js')}}"></script>

  @yield('custom-js')

  <script>
    function confirmDelete(){
        return confirm("Are you Sure you want to delete");
    }
    @if(Session::has('success'))
     toastr.success(
      '{{ Session::get('success') }}', 
      'Success', 
      {timeOut: 15000})
     @endif
     @if(Session::has('error'))
      toastr.error(
      '{{ Session::get('error') }}', 
      'Error', 
      {timeOut: 5000})
      @endif
  </script>

  @yield('js')
  @yield('myjs')

</body>

</html>
