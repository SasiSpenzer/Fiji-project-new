<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://www.jonthornton.com/jquery-timepicker/jquery.timepicker.css">--}}

    {{-- <link rel="stylesheet" href="{{ url('/') }}/vendors/css/vendor.bundle.base.css"> --}}
    {{-- <link rel="stylesheet" href="{{ url('/') }}/vendors/jqvmap/jqvmap.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ url('/') }}/vendors/flag-icon-css/css/flag-icon.min.css"> --}}

    {{-- <link rel="stylesheet" href="{{ url('/') }}/css/style.css"> --}}

    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png" />
    {{-- Styles --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ url('/') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link href="{{ mix('/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css">

    {{--        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />--}}

    @yield('template_linked_css')

    <style type="text/css">
        .colorBtn{
            background-color: #CB0062!important;
        }
        @yield('template_fastload_css')


        @php
            if(!isset($notificationData)){
                $notificationData = '';
                $notificationData = '';
            }
        @endphp

    </style>


    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>


    @yield('head')


</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="">Vessel Operations</a>
            <a class="navbar-brand brand-logo-mini" href="">Vessel Operations</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            @role('user,employee')
            <ul class="navbar-nav mr-lg-">
                <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text" id="search">
                                        <i class="mdi mdi-magnify"></i>
                                    </span>
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
                        </div>
                    </div>
                </li>
            </ul>
            <ul style="list-style-type: none;">
                <li class="nav-item">
                    <h4 class="mt-4 mr-5 font-weight-bold">Welcome &nbsp; <span class="font-weight-light">{{{ isset(Auth::user()->name) ? Auth::user()->name:''}}}</span></h4>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>

                        @if($notificationData)
                            @foreach($notificationData as $each)
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div onclick="viewNotification({{$each->id}})" class="preview-item-content" id="notification">
                                        <h6 id="{{$each->id}}" @if($each->status != 0) class="preview-subject font-weight-normal" @endif>{{$each->description}}</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            1 day ago
                                        </p>
                                    </div>
                                </a>
                                {{--                                        <tr id="{{$each->id}}" @if($each->status != 0) class="btn-success"   @endif>--}}
                                {{--                                            <th scope="row">{{$each->id}}</th>--}}
                                {{--                                            <td id="notification">{{$each->description}}</td>--}}
                                {{--                                            <td id="notification"><input onclick="viewNotification({{$each->id}})" type="button" class="btn btn-warning" value="view more"></td>--}}
                                {{--                                        </tr>--}}
                            @endforeach
                        @endif
                    </div>
                </li>

                <li class="nav-item nav-profile dropdown">
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a  class="dropdown-item">
                            <i class="mdi mdi-account"></i>
                            Profile
                        </a>
                        <a class="dropdown-item">
                            <i class="mdi mdi-logout"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            @endrole

            <ul class="navbar-nav navbar-nav-right">
                @role('meeting_room')
                <h5  style="margin-right: 10px;margin-top: 25px;" align="right">Welcome To Meeting Room No 01</h5>
                @endrole
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="https://via.placeholder.com/30x30" alt="profile" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a href="profile/{{{ isset(Auth::user()->name) ? Auth::user()->name:''}}}" class="dropdown-item">
                            <i class="mdi mdi-account "></i>
                            Profile
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">

                            <i href="{{ route('logout') }}" class="mdi mdi-logout"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('partials.nav')
        @yield('content')
    </div>
</div>

{{-- Scripts --}}
<script src="{{ mix('/js/app.js') }}"></script>




<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ url('/') }}/vendors/js/vendor.bundle.base.js"></script>
<script src="{{ url('/') }}/js/template.js"></script>
<script src="{{ url('/') }}/js/SideNavi.js"></script>
<script src="https://www.jonthornton.com/jquery-timepicker/jquery.timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>


@if(config('settings.googleMapsAPIStatus'))
    {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
@endif

@yield('footer_scripts')

</body>
</html>
