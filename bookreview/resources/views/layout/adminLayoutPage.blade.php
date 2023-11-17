<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Admin |Book Review</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @include("partial.head")
</head>
<body class="cbp-spmenu-push">
    <div class="main-content">
        @include("partial.sidebar")
        @include("partial.header")

        <div id="page-wrapper">
            <div class="main-page">
                @yield('content')
            </div>
        </div>


        @include("partial.footer")
    </div>

@include("partial.bodyJs")
</body>
</html>
