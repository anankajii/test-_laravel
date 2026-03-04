<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nice Admin - Dashboard</title>

    {{-- CSS --}}
    <link href="{{ asset('backend/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/dist/css/style.min.css') }}" rel="stylesheet">
</head>

<body>

    {{-- Preloader --}}
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    {{-- Main Wrapper --}}
    <div id="main-wrapper">

        {{-- Navbar --}}
        @include('backend.layouts.navbar')

        {{-- Sidebar --}}
        @include('backend.layouts.sidebar')

        {{-- Page Wrapper --}}
        <div class="page-wrapper">

            @yield('content')

            {{-- Footer --}}
            <footer class="footer text-center">
                All Rights Reserved by Nice Admin.
            </footer>

        </div>

    </div>

    {{-- JS --}}
    <script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('backend/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('backend/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('backend/dist/js/waves.js') }}"></script>
    <script src="{{ asset('backend/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('backend/dist/js/custom.min.js') }}"></script>

    {{-- Dashboard Charts --}}
    <script src="{{ asset('backend/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('backend/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('backend/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/dist/js/pages/dashboards/dashboard1.js') }}"></script>

</body>
</html>