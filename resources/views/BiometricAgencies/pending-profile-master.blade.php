<!DOCTYPE html>
<html>
<head>

    @include('BiometricAgencies.include._header')
</head>


<body class="fixed-left">
    @if(Auth::check())
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endif

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("BiometricAgencies.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    {{-- @include("BiometricAgencies.include._side-menu") --}}
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('BiometricAgencies.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("BiometricAgencies.include._scripts")

</body>
</html>
