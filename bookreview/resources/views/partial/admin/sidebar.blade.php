<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html">
            <img src="{{asset('backend/images/logo.png')}}" class="img-fluid" alt="">
            <span>XRay</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-more-fill"></i></div>
                    <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                <li class="active">
                    <a href="{{route('admin.category.index')}}" class="iq-waves-effect"><i class="fa fa-bars" aria-hidden="true"></i><span>Category</span></a>
                </li>
                <li>
                    <a href="{{route('admin.review.index')}}" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>Post review</span></a>
                </li>
                <li>
                    <a href="{{route('admin.menu.index')}}" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Menu</span></a>
                </li>
                <li>
                    <a href="{{route('admin.user.index')}}" class="iq-waves-effect"><i class="ri-group-fill"></i><span>User</span></a>
                </li>





            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
