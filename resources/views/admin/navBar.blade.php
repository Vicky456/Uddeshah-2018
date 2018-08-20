<div class="navbar">
    <!-- Open side - Naviation on mobile -->
    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
        <i class="material-icons">&#xe5d2;</i>
    </a>
    <!-- / -->

    <!-- Page title - Bind to $state's title -->
    <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>

    <!-- navbar right -->
    <ul class="nav navbar-nav pull-right">

        <li class="nav-item dropdown">
            <a class="nav-link clear" href data-toggle="dropdown">
                <spam style="font-size: 21px;margin-right:  3px;">{{\Illuminate\Support\Facades\Auth::user()->name}}  </spam>
                  <span class="avatar w-32">
                    <img src="/assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>

                  </span>

            </a>
            <div class="dropdown-menu pull-right dropdown-menu-scale">

                <a href="/UserSetting" class="dropdown-item" ui-sref="app.page.setting">
                    <span>Settings</span>

                </a>
                <div class="dropdown-divider"></div>
                <a href="/UserSetting" class="dropdown-item" ui-sref="app.docs">
                    Need help?
                </a>
                <a class="dropdown-item" ui-sref="access.signin" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

        </li>
        <li class="nav-item hidden-md-up">
            <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                <i class="material-icons">&#xe5d4;</i>
            </a>
        </li>
    </ul>
    <!-- / navbar right -->

    <!-- navbar collapse -->

    <!-- / navbar collapse -->
</div>