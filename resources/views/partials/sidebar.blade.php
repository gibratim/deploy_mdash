<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          @guest
            <li></li>
          @else
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">

                  @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)
                    <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}">
                  @else
                    <img src="{!! asset('images/user.png') !!}" alt="{{ Auth::user()->name }}">
                  @endif

                </div>

                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @role('admin')
              <li class="nav-item">

                <a class="nav-link {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}" href="{{ url('/users') }}">
                  <i class="menu-icon mdi mdi-backup-restore"></i>
                  <span class="menu-title">@lang('titles.adminUserList')</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ Request::is('users/create') ? 'active' : null }}" href="{{ url('/users/create') }}">
                  <i class="menu-icon mdi mdi-sticker"></i>
                  <span class="menu-title">@lang('titles.adminNewUser')</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ Request::is('active-users') ? 'active' : null }}" href="{{ url('/active-users') }}">
                  <i class="menu-icon mdi mdi-chart-line"></i>
                  <span class="menu-title">@lang('titles.activeUsers')</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ Request::is('logs') ? 'active' : null }}" href="{{ url('/logs') }}">
                  <i class="menu-icon mdi mdi-table"></i>
                  <span class="menu-title">@lang('titles.adminLogs')</span>
                </a>
              </li>
            
          @endrole
          
          @role('team|admin')
              <li class="nav-item">

                <a class="nav-link {{ Request::is('results', 'results/upload') ? 'active' : null }}" href="{{ url('/results/upload') }}">
                  <i class="menu-icon mdi mdi-backup-restore"></i>
                  <span class="menu-title">@lang('titles.uploadResults')</span>
                </a>
              </li>

          @endrole  

          <li class="nav-item">

                <a class="nav-link {{ Request::is('results', 'results/view') ? 'active' : null }}" href="{{ url('/results/view') }}">
                  <i class="menu-icon mdi mdi-table"></i>
                  <span class="menu-title">@lang('titles.viewResults')</span>
                </a>
          </li> 
          
        @endguest
        </ul>
      </nav>