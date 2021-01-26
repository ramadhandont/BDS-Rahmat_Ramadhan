
      <!-- sidebar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('/') }}">Lotte</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">Lt</a>
          </div>
          <ul class="sidebar-menu">
              
            @foreach(Session::get('menus')[0] as $key)
            
            <li class="{{ (request()->is($key->slug)) ? 'active' : '' }}"><a class="nav-link" href="{{ $key->slug }}"><i class="{{ $key->icon }}"></i> <span>{{ $key->title }}</span></a></li>
            
            @endforeach
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>

        </aside>
      </div>
      <!-- sidebar -->