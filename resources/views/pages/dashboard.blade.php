@extends('layouts.apps')


@section('content')
        
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <!-- <div class="breadcrumb-item active"><a href="{{ url('/')}}">Dashboard</a></div> -->
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Hi, {{Session::get('uName')}}</h2>
            <p class="section-lead">@lang('global.p_dashboard_welcome')</p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Today</h4>
                  </div>
                  <div class="card-body">
                          
                    @foreach(Session::get('menus')[0] as $key)
                    
                    <li class="{{ (request()->is($key->slug)) ? 'active' : '' }}"><a class="nav-link" href="{{ $key->slug }}"><i class="{{ $key->icon }}"></i> <span>{{ $key->title }}</span></a></li>
                    
                    @endforeach
                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted">2,100</div>
                      <div class="font-weight-bold mb-1">Google</div>
                      <div class="progress" data-height="3">
                        <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                      <div class="font-weight-bold mb-1">Facebook</div>
                      <div class="progress" data-height="3">
                        <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                      <div class="font-weight-bold mb-1">Bing</div>
                      <div class="progress" data-height="3">
                        <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted">884</div>
                      <div class="font-weight-bold mb-1">Yahoo</div>
                      <div class="progress" data-height="3">
                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted">473</div>
                      <div class="font-weight-bold mb-1">Kodinger</div>
                      <div class="progress" data-height="3">
                        <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="text-small float-right font-weight-bold text-muted">418</div>
                      <div class="font-weight-bold mb-1">Multinity</div>
                      <div class="progress" data-height="3">
                        <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>MTD</h4>
                  </div>
                  <div class="card-body">
                    
                    <div class="summary">
                      <div class="summary-info">
                        <h4>$1,053</h4>
                        <div class="text-muted">Sold 3 items on 2 customers</div>
                        <div class="d-block mt-2">
                          <a href="#">View All</a>
                        </div>
                      </div>
                      <div class="summary-item">
                        <h6>Item List <span class="text-muted">(3 Items)</span></h6>
                        <ul class="list-unstyled list-unstyled-border">
                          <li class="media">
                            <a href="#">
                              <img class="mr-3 rounded" width="50" src="{{url('stisla/assets/img/products/product-1-50.png')}}" alt="product">
                            </a>
                            <div class="media-body">
                              <div class="media-right">$405</div>
                              <div class="media-title"><a href="#">PlayStation 9</a></div>
                              <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday</div>
                            </div>
                          </li>
                          <li class="media">
                            <a href="#">
                              <img class="mr-3 rounded" width="50" src="{{url('stisla/assets/img/products/product-2-50.png')}}" alt="product">
                            </a>
                            <div class="media-body">
                              <div class="media-right">$499</div>
                              <div class="media-title"><a href="#">RocketZ</a></div>
                              <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday
                              </div>
                            </div>
                          </li>
                          <li class="media">
                            <a href="#">
                              <img class="mr-3 rounded" width="50" src="{{url('stisla/assets/img/products/product-3-50.png')}}" alt="product">
                            </a>
                            <div class="media-body">
                              <div class="media-right">$149</div>
                              <div class="media-title"><a href="#">Xiaomay Readme 4.0</a></div>
                              <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
@endsection
@section('tempJs')
<!-- <script src="{{url('stisla/assets/js/page/index.js')}}"></script> -->
@endsection

@section('tempCss')
@endsection

