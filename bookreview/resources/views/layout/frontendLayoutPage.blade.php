
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Design Blog a Blog Category Bootstrap Responsive Website Template | Home : W3layouts</title>
    @include('partial.frontend.head')

</head>

<body>
<!-- header -->
@include('partial.frontend.header')
<!-- //header -->
{{-- body content--}}
@yield('content')

<!-- footer -->
@include('partial.frontend.footer')
<!-- //footer -->

<!-- Template JavaScript -->
@include('partial.frontend.bodyJS')
</body>

</html>
