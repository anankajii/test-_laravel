<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>

{{-- CSS UTAMA --}}
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

    {{-- Page Content --}}
    <div class="page-wrapper">

        <div class="container-fluid">

            @yield('content')

        </div>

        {{-- Footer --}}
        <footer class="footer text-center">
            © {{ date('Y') }} Sistem Informasi
        </footer>

    </div>

</div>

{{-- JS UTAMA --}}
<script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<script src="{{ asset('backend/dist/js/app.min.js') }}"></script>
<script src="{{ asset('backend/dist/js/app.init.js') }}"></script>
<script src="{{ asset('backend/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('backend/dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('backend/dist/js/custom.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
