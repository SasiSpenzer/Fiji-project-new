{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            {!! config('app.name', trans('titles.app')) !!}--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--            <span class="sr-only">{!! trans('titles.toggleNav') !!}</span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            --}}{{-- Left Side Of Navbar --}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                @role('admin')--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            {!! trans('titles.adminDropdownNav') !!}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item {{ (Request::is('roles') || Request::is('permissions')) ? 'active' : null }}" href="{{ route('laravelroles::roles.index') }}">--}}
{{--                                {!! trans('titles.laravelroles') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}" href="{{ url('/users') }}">--}}
{{--                                {!! trans('titles.adminUserList') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('users/create') ? 'active' : null }}" href="{{ url('/users/create') }}">--}}
{{--                                {!! trans('titles.adminNewUser') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('monthly-shipping-schedule') ? 'active' : null }}" href="{{ url('/Monthly-shipping-schedule') }}">--}}
{{--                                Monthly Shipping Schedule--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('Vessel-Berthing-Application') ? 'active' : null }}" href="{{ url('/Vessel-Berthing-Application') }}">--}}
{{--                                Vessel Berthing Application--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('themes','themes/create') ? 'active' : null }}" href="{{ url('/themes') }}">--}}
{{--                                {!! trans('titles.adminThemesList') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('logs') ? 'active' : null }}" href="{{ url('/logs') }}">--}}
{{--                                {!! trans('titles.adminLogs') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('activity') ? 'active' : null }}" href="{{ url('/activity') }}">--}}
{{--                                {!! trans('titles.adminActivity') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('phpinfo') ? 'active' : null }}" href="{{ url('/phpinfo') }}">--}}
{{--                                {!! trans('titles.adminPHP') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/routes') }}">--}}
{{--                                {!! trans('titles.adminRoutes') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('active-users') ? 'active' : null }}" href="{{ url('/active-users') }}">--}}
{{--                                {!! trans('titles.activeUsers') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item {{ Request::is('blocker') ? 'active' : null }}" href="{{ route('laravelblocker::blocker.index') }}">--}}
{{--                                {!! trans('titles.laravelBlocker') !!}--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endrole--}}
{{--            </ul>--}}
{{--            --}}{{-- Right Side Of Navbar --}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                --}}{{-- Authentication Links --}}
{{--                @guest--}}
{{--                    <li><a class="nav-link" href="{{ route('login') }}">{{ trans('titles.login') }}</a></li>--}}
{{--                    <li><a class="nav-link" href="{{ route('register') }}">{{ trans('titles.register') }}</a></li>--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)--}}
{{--                                <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">--}}
{{--                            @else--}}
{{--                                <div class="user-avatar-nav"></div>--}}
{{--                            @endif--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}" href="{{ url('/profile/'.Auth::user()->name) }}">--}}
{{--                                {!! trans('titles.profile') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            Traccular Admin--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--            <span class="sr-only">{!! trans('titles.toggleNav') !!}</span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            --}}{{-- Left Side Of Navbar --}}
{{--            <ul class="navbar-nav mr-auto">--}}


{{--                @role('admin')--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a  class="nav-link dropdown-toggle" href="/home" id="navbarDropdown" role="button" data-toggle=" " aria-haspopup="true" aria-expanded="false">--}}
{{--                        Home--}}
{{--                    </a>--}}

{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Branch--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}


{{--                        <a class="dropdown-item" href="{{ url('/organization/branch') }}">--}}
{{--                            {!! trans('titles.branchList') !!}--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="{{ url('/organization/branch/create') }}">--}}
{{--                            {!! trans('titles.createBranch') !!}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="{{ url('branch-type') }}">--}}
{{--                            {!! trans('titles.BranchTypes') !!}--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Divisions--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}


{{--                        <a class="dropdown-item" href="{{ url('/branch-divisions') }}">--}}
{{--                            List Divisions--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="{{ url('/branch-division-create') }}">--}}
{{--                            Create Division--}}
{{--                        </a>--}}


{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Facilities--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}


{{--                        <a class="dropdown-item" href="{{ url('/branch-facilities') }}">--}}
{{--                            List Facilities--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="{{ url('/branch-facility-create') }}">--}}
{{--                            Create Facility--}}
{{--                        </a>--}}


{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Assets--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="{{ url('/branch-asset-create') }}">--}}
{{--                            Create Assets--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Projects--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="{{ url('/projects/create') }}">--}}
{{--                            Create Project--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="{{ url('/projects') }}">--}}
{{--                            List Projects--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Teams--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="{{ url('/teams/create') }}">--}}
{{--                            Create Project--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="{{ url('/teams') }}">--}}
{{--                            List Teams--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                @endrole--}}
{{--                @role('user')--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        User Menu--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}

{{--                        <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/visitor-create') }}">--}}
{{--                            {!! trans('titles.visitorCreate') !!}--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/meeting-create') }}">--}}
{{--                            {!! trans('titles.meetingCreate') !!}--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/meeting-list') }}">--}}
{{--                            {!! trans('titles.meetingList') !!}--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/parking-request') }}">--}}
{{--                            Parking Request--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </li>--}}

{{--                @endrole--}}
{{--                @role('employee')--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Employee Menu--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}

{{--                        <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/home') }}">--}}
{{--                            Home--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/meeting-create') }}">--}}
{{--                            {!! trans('titles.meetingCreate') !!}--}}
{{--                        </a>--}}


{{--                    </div>--}}
{{--                </li>--}}

{{--                @endrole--}}
{{--            </ul>--}}
{{--            --}}{{-- Right Side Of Navbar --}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                --}}{{-- Authentication Links --}}
{{--                @guest--}}
{{--                    <li><a class="nav-link" href="{{ route('login') }}">{{ trans('titles.login') }}</a></li>--}}
{{--                    <li><a class="nav-link" href="{{ route('register') }}">{{ trans('titles.register') }}</a></li>--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)--}}
{{--                                <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">--}}
{{--                            @else--}}
{{--                                <div class="user-avatar-nav"></div>--}}
{{--                            @endif--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}" href="{{ url('/profile/'.Auth::user()->name) }}">--}}
{{--                                {!! trans('titles.profile') !!}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


@role('admin')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="mdi mdi-home-outline menu-icon"></i>
                <span  class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-source-fork menu-icon"></i>
                <span class="menu-title">Monthly Shipping</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/Monthly-shipping-schedule') }}">Agents Monthly Shipping Schedule</a></li>
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/organization/branch/create') }}">Create Branch</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('branch-type') }}">Branch Types</a></li>--}}
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account-box-outline"></i>
                <span class="menu-title" >Role Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/roles') }}">Manage Roles</a></li>
                    {{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/organization/branch/create') }}">Create Branch</a></li>--}}
                    {{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('branch-type') }}">Branch Types</a></li>--}}
                </ul>
            </div>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">--}}
{{--                <i class="mdi mdi-grid-large menu-icon"></i>--}}
{{--                <span class="menu-title">Divisions</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="ui-advanced">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/branch-divisions') }}">List Divisions</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/branch-division-create') }}">Create Division</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">--}}
{{--                <i class="mdi mdi-bookmark-plus-outline menu-icon"></i>--}}
{{--                <span class="menu-title">Facilities</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="form-elements">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ url('/branch-facilities') }}">List Facilities</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ url('/branch-facility-create') }}">Create Facility</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">--}}
{{--                <i class="mdi mdi-office-building menu-icon"></i>--}}
{{--                <span class="menu-title">Floors</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="form-elements">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ url('/create-floor') }}">Create Floors</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ url('/list-floors') }}">List Floors</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">--}}
{{--                <i class="mdi mdi-shape-polygon-plus menu-icon"></i>--}}
{{--                <span class="menu-title">Assets</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="editors">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ url('/branch-asset-create') }}">Create Assets</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ url('/asset-list') }}">List Assets</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">--}}
{{--                <i class="mdi mdi-folder-multiple-outline menu-icon"></i>--}}
{{--                <span class="menu-title">Projects</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="charts">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/projects/create') }}">Create Project</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/projects') }}">List Projects</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">--}}
{{--                <i class="mdi mdi-account-multiple-outline menu-icon"></i>--}}
{{--                <span class="menu-title">Teams</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="tables">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/teams/create') }}">Create Team</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/teams') }}">List Teams</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">--}}
{{--                <i class="mdi mdi-account-multiple-outline menu-icon"></i>--}}
{{--                <span class="menu-title">Users</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="tables">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/users') }}">List Users</a></li>--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">--}}
{{--                <i class="mdi mdi-account-multiple-outline menu-icon"></i>--}}
{{--                <span class="menu-title">Notifications</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="tables">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="{{ url('/sms_templates') }}">SMS Templates</a></li>--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">--}}
{{--                <i class="mdi mdi-account-multiple-outline menu-icon"></i>--}}
{{--                <span class="menu-title">Reports</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="tables">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/visitor-summary') }}">Visitor Summary Report</a></li>--}}
{{--                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/visitor-details-report') }}">Visitor Details Report</a></li>--}}
{{--                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/violation-report') }}">Violation report</a></li>--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}


    </ul>
</nav>
@endrole

@role('user')

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="mdi mdi-home-outline menu-icon"></i>
                <span  class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account-circle-outline menu-icon"></i>
                <span class="menu-title">Visitor</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/visitor-create') }}">Create Visitor</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/visitor-list') }}">List Visitors</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/current-visitors') }}">Current Visitors</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/visitor-summary') }}">Visitor Summary Report</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/visitor-details-report') }}">Visitor Details Report</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/violation-report') }}">Violation report</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-clock-outline menu-icon"></i>
                <span class="menu-title">Meeting</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/meeting-create') }}">Create Meeting</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/all-meeting-list') }}">List Meeting</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/parking-request') }}">Parking Request</a></li>

                </ul>
            </div>
        </li>
    </ul>
</nav>

@endrole

@role('meeting_room')

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">




    </ul>
</nav>


@endrole

@role('employee')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="mdi mdi-home-outline menu-icon"></i>
                <span  class="menu-title">Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-clock-outline menu-icon"></i>
                <span class="menu-title">Meeting</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/meeting-create-project') }}">Create Meeting</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/meeting-list') }}">List Meeting</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/meeting-pending') }}">Pending Meeting</a></li>


                </ul>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/projects/create') }}">Create Project</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/projects') }}">List Projects</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

@endrole

@role('project')

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="mdi mdi-home-outline menu-icon"></i>
                <span  class="menu-title">Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dsmyvendorsd" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-source-fork menu-icon"></i>
                <span class="menu-title">Vendors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dsmyvendorsd">
                <ul class="nav flex-column sub-menu">
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/vendor-create') }}">Create Vendor</a></li>
                    <li  class="nav-item"> <a class="nav-link" href="{{ url('/vendor-list') }}">List Vendors</a></li>
                </ul>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#myprojects" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="myprojects">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/my-projects') }}">My Projects</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/project-meetings') }}">Project Meetings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/meeting-create-project') }}">Create Meetings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/gate-pass') }}">Gate Pass Requests</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/gate-pass-create') }}">Create Gate Pass</a></li>
                </ul>
            </div>
        </li>


    </ul>
</nav>
@endrole

@role('vendor')

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="mdi mdi-home-outline menu-icon"></i>
                <span  class="menu-title">Home</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#myprojects" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-clock-outline menu-icon"></i>
                <span class="menu-title">Meetings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="myprojects">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="{{ url('/meeting-create-project') }}">Create Meetings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/meeting-list-project') }}">List Meetings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/gate-pass-request') }}">Gate Pass Requests</a></li>

                </ul>
            </div>
        </li>


    </ul>
</nav>
@endrole