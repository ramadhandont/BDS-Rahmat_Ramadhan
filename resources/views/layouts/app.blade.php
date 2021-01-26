<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@lang('global.'.Request::path().'.title') - @lang('global.'.Request::path().'.subcontent')</title>


  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{url('stisla/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('stisla/assets/css/all.css')}}">

  <!-- CSS Libraries -->
  <!-- <link rel="stylesheet" href="{{url('stisla/node_modules/bootstrap-social/bootstrap-social.css')}}"> -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{url('stisla/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
            @if (Request::path() == 'login')
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            @elseif(Request::path() == 'register')
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            @endif
          
            <div class="login-brand">
              <img src="@lang('global.logo')" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            @yield('content')
            <div class="simple-footer">
              @lang('global.copyright')
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{url('stisla/assets/js/libs/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('stisla/assets/js/libs/popper.min.js')}}" ></script>
  <script src="{{url('stisla/assets/js/libs/bootstrap.min.js')}}"></script>
  <script src="{{url('stisla/assets/js/libs/jquery.nicescroll.min.js')}}"></script>
  <script src="{{url('stisla/assets/js/libs/moment.min.js')}}"></script>
  <script src="{{url('stisla/assets/js/stisla.js')}}"></script>


  <!-- Template JS File -->
  <script src="{{url('stisla/assets/js/scripts.js')}}"></script>
  <script src="{{url('stisla/assets/js/custom.js')}}"></script>

</body>
</html>


