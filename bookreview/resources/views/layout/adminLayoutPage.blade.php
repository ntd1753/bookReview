<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    @include('partial.head')


</head>
<body class="sidebar-main-menu">
<!-- loader Start -->
{{--<div id="loading">--}}
{{--    <div id="loading-center">--}}

{{--    </div>--}}
{{--</div>--}}
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
   @include('partial.sidebar')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <!-- TOP Nav Bar -->
        @include('partial.header')
        <!-- TOP Nav Bar END -->
        @yield('content')
        <!-- Footer -->
        @include('partial.footer')
        <!-- Footer END -->
    </div>
</div>
<!-- Wrapper END -->

@include('partial.bodyJS')
</body>
</html>
