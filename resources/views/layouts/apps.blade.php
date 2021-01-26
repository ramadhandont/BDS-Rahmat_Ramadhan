<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>
    {{ config('app.name', 'Laravel') }} ({{ config('app.detailName', 'Laravel') }})
    @if (Request::path() != '/')
      - @lang('global.'.Request::path().'.title')
    @endif
  </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('stisla/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/css/all.css')}}">

  @yield('tempCss')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">
</head>

<body class="sidebar-gone">
  <div id="app">
    <div class="main-wrapper">
      <!-- header -->
        @include('layouts.header')
      <!-- header -->
      <!-- sidebar -->
        @include('layouts.sidebar')
      <!-- sidebar -->

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <!-- Main Content -->
      <!-- footer -->
        @include('layouts.footer')
      <!-- footer -->
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('stisla/assets/js/libs/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('stisla/assets/js/libs/popper.min.js')}}" ></script>
  <script src="{{asset('stisla/assets/js/libs/bootstrap.min.js')}}"></script>
  <script src="{{asset('stisla/assets/js/libs/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('stisla/assets/js/libs/moment.min.js')}}"></script>
  <script src="{{asset('stisla/assets/js/stisla.js')}}"></script>


  <!-- Template JS File -->
  <script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
    @yield('tempJs')
</body>
</html>
