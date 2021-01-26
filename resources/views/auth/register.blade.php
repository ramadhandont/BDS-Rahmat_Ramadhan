@extends('layouts.app')
@section('content')
            <div class="card card-primary">
              <div class="card-header"><h4>@lang('global.'.Request::path().'.title')</h4></div>

              <div class="card-body">
                <!-- <form class="form-horizontal" class="needs-validation" method="POST" action="{{config('global.halaman')['Register Save'][1]}} "> -->
                <!-- <form method="POST"> -->                
                <form class="form-horizontal" class="needs-validation" method="POST" action="@lang('global.register/save.slug')">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-6">
                        <label for="nm">@lang('global.name')</label>
                        <input id="nm" type="text" class="form-control" name="nm" autofocus>
                        </div>
                        <div class="form-group col-6">
                        <label for="cd">@lang('global.user')</label>
                        <input id="cd" type="text" class="form-control" name="cd">
                        </div>
                    </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="pass" class="d-block">@lang('global.pass')</label>
                      <input id="pass" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="pass">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="pass2" class="d-block">@lang('global.pass_c')</label>
                      <input id="pass2" type="password" class="form-control" name="password-confirm" name="pass2">
                    </div>
                  </div>


                  <div class="form-divider">
                    @lang('global.y_contact')
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                        <label for="email">@lang('global.mail')</label>
                        <input id="email" type="email" class="form-control" name="email">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group col-6">
                      <label>@lang('global.cell')</label>
                      <input type="text" class="form-control" name="cell">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">@lang('global.agree')</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block">
                    <!-- <button type="submit" class="btn btn-primary btn-lg btn-block"> -->
                      @lang('global.'.Request::path().'.title')
                    </button>
                  </div>
                </form>
              </div>
            </div>
            
            <div class="mt-5 text-muted text-center">
              @lang('global.have_account') <a href="@lang('global.login.slug')" class="text-small">@lang('global.login.title')</a>
            </div>
@endsection