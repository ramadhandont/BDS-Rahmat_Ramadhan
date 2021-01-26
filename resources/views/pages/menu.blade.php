@extends('layouts.apps')


@section('content')
        
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ url('/')}}">Dashboard</a> @if (Request::path() != '/') / @lang('global.'.Request::path().'.title') @endif
              </div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Hi, {{Session::get('uName')}}</h2>
            <p class="section-lead">@lang('global.p_dashboard_welcome')</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Today</h4>
                  </div>
                  <div class="card-body">
                    <!-- <table class="table dynatable" id ="penjualan">
                      <thead>
                        <tr>
                          <th style="width:50px;">
                            <input type="checkbox" id="checkAll">
                          </th>
                          <th>Barcode</th>
                          <th>Product Name</th>
                          <th>Normal Price</th>
                          <th>Qty</th>
                          <th>Sub Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table> -->
                    {!! $tablessss !!}
                    <div id="show">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
@endsection
@section('tempJs')
<!-- <script src="{{url('stisla/assets/js/page/index.js')}}"></script> -->
<script src="{{url('js/pages/tabel.js')}}"></script>
@endsection

@section('tempCss')
@endsection

