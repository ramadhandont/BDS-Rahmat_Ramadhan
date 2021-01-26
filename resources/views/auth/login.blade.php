@extends('layouts.app')

@section('content')
            <div class="card card-primary">
              <div class="card-header"><h4>@lang('global.'.Request::path().'.title')</h4>@lang('global.'.Request::path().'.subcontent')</div>

              <div class="card-body">
                @include('layouts.alert')
                <!--
                <form method="POST" action="#" class="needs-validation" novalidate="">
                -->
                <form class="form-horizontal" class="needs-validation" method="POST" action="@lang('global.login/auth.slug')">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" name="user" maxlength="9" placeholder="@lang('global.user')" value="{{ old('email') }}" required autofocus>
                  </div>

                  <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="@lang('global.pass')" required>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      @lang('global.'.Request::path().'.title')
                    </button>
                  </div>
                </form>
                <!--
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div>
                -->

              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
                <a href="{{ url('/forgotPassword') }}" class="text-small">Forgot Password?</a>
            </div> -->
            <div class="mt-5 text-muted text-center">
                <a href="@lang('global.register.slug')" class="text-small">@lang('global.register.title')</a>
            </div>
@endsection