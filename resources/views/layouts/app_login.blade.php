
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>


    <link rel="stylesheet" href="{{ url('/') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">

    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png" />


    <style type="text/css">
        .colorBtn{
            background-color: #CB0062!important;
        }
        @yield('template_fastload_css')



    </style>


    <script src="{{ url('/') }}/js/off-canvas.js"></script>
    <script src="{{ url('/') }}/js/hoverable-collapse.js"></script>
    <script src="{{ url('/') }}/js/template.js"></script>
    <script src="{{ url('/') }}/js/settings.js"></script>
    <script src="{{ url('/') }}/js/todolist.js"></script>

    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>



    @yield('head')

</head>
<body>


@include('partials.nav')





@yield('content')
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            @include('partials.form-status')
        </div>
    </div>
</div>

<!-- page-body-wrapper ends -->


<script src="{{ url('/') }}/vendors/js/vendor.bundle.base.js"></script>



<script src="{{ url('/') }}/js/off-canvas.js"></script>
<script src="{{ url('/') }}/js/hoverable-collapse.js"></script>
<script src="{{ url('/') }}/js/template.js"></script>
<script src="{{ url('/') }}/js/settings.js"></script>
<script src="{{ url('/') }}/js/todolist.js"></script>


<script src="{{ url('/') }}/js/dashboard.js"></script>

@if(config('settings.googleMapsAPIStatus'))
    {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
@endif

@yield('footer_scripts')


</body>
</html>
