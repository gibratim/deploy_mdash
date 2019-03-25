<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
    <meta name="description" content="">
    <meta name="author" content="Matibabu">
    <link rel="shortcut icon" href="/favicon.ico">

    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        @yield('template_linked_fonts')

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        @yield('template_linked_css')

        <style type="text/css">
        @yield('template_fastload_css')

        @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
        .user-avatar-nav {
            background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
background-size: auto 100%;
}
@endif

</style>

{{-- Scripts --}}
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
    </script>

        <!--
        @if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')
            <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
        @endif
    -->

    <!-- plugins:css -->
    <link href="{{ asset('plugins/iconfonts/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/vendor.bundle.base.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/css/vendor.bundle.addons.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    @yield('head')

</head>
<body>
    <div id="app" class="container-scroller">

        @auth
        @include('partials.nav')
        
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->
            @include('partials.sidebar')


            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                @include('partials.form-status')
                            </div>
                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>
        </div>
        @else
        <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
            @yield('content')
        </div>
        @endauth
    </div>

    {{-- Scripts --}}
    <!-- <script src="{{ mix('/js/app.js') }}"></script> -->

    <!-- plugins:js -->
    <script src="{{ asset('plugins/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('plugins/js/vendor.bundle.addons.js') }}"></script>

    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

    @if(config('settings.googleMapsAPIStatus'))
    {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
    @endif

    @yield('footer_scripts')

</body>
</html>
