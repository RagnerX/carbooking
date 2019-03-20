<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="active">
                <a href="{{route('available.vehicles')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.navigate.main">Available Vehicles</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="pcoded-hasmenu {{--active pcoded-trigger--}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Hiring</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('hiring.requests')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.default">My Requests</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{route('completed.hiring.requests')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.default">Completed Requests</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>

    </div>
</nav>
