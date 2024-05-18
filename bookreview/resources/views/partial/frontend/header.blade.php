<header class="w3l-header">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <a class="navbar-brand" href="{{route('frontend.home')}}">
                <span class="fa fa-pencil-square-o"></span> Book Review</a>
            <!-- if logo is image enable this
                    <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
{{--                    <li class="nav-item active my-auto">--}}
{{--                        <a class="nav-link" href="{{route('frontend.home')}}">Trang chủ</a>--}}
{{--                    </li>--}}
                    @foreach($categories as $item)
                        @if($item -> category_parent_id == 0)
                            <li class="nav-item dropdown @@category__active my-auto">
                                <a class="nav-link dropdown-toggle" href="/menu/{{$item->category_slug}}/{{$item->id}}" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$item -> category_name }} <span class="fa fa-angle-down"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($categories as $child)
                                        @if($child -> category_parent_id == $item -> id)
                                    <a class="dropdown-item @@ls__active" href="/menu/{{$child->category_slug}}/{{$child->id}}">
                                        {{$child -> category_name}}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endif
                    @endforeach
                <!--/search-right-->
                <div class="search-right my-auto">
                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <h3 class="hny-title two">Search here</h3>
                            <form action="/search" method="Get" class="search-box">
                                <input type="search" placeholder="Search for blog posts" name="search"
                                       required="required" autofocus="">
                                <button type="submit" class="btn">Search</button>
                            </form>
                            <a class="close" href="#close">×</a>
                        </div>
                    </div>
                    <!-- /search popup -->
                </div>
                <!--//search-right-->

                <!-- author -->
                    @guest()
                        <div class="header-author d-flex ml-lg-4 pl-2 mt-lg-0 mt-3">

                            <div class="align-self ml-3">
                                <a href="{{ route('auth.login') }}">
                                    <h5>Đăng nhập</h5>
                                </a>

                            </div>
                        </div>
                    @else
                        <div class="header-author d-flex ml-lg-4 pl-2 mt-lg-0 mt-3 dropdown @@category__active">
                            <a class="img-circle img-circle-sm" href="#author">
                                <img src="https://cellphones.com.vn/sforum/wp-content/uploads/2023/10/avatar-trang-4.jpg" class="img-fluid" alt="...">
                            </a>
                            <div class="align-self ml-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h5>{{Auth()->user()->name}}</h5>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
{{--                                            <a class="dropdown-item @@ls__active" href="{{route('user.index')}}">--}}
{{--                                                dashboard</a>--}}
                                    <a class="dropdown-item @@ls__active" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Đăng xuất</a>
                                </div>
                            </div>
                        </div>

{{--                        <p>{{Auth::user()->name}}</p>--}}
                    @endguest
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

            <!-- toggle switch for light and dark theme -->

            <!-- //toggle switch for light and dark theme -->

    <!--//nav-->
</header>
