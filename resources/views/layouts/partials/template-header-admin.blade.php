<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{ route('home.index') }}">
                <img src="{{ asset('/assets/pages/img/logo-uni.png') }}" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-default"> {{ PorAtender()->count() }} </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>Tiene
                                <span class="bold">{{ PorAtender()->count() }} Nuevos</span> Mensajes</h3>
                            <a href="{{ route('admin.mensajes.index') }}">Ver Todos</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                @foreach (PorAtender() as $mensaje)
                                    <li>
                                        <a href="{{ route('admin.mensajes.show',$mensaje->id) }}">
                                            <span class="photo">
                                                <img src="{{ $mensaje->postulante_foto }}" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                <span class="from"> {{ $mensaje->postulante }} </span>
                                            </span>
                                            <span class="message"> {{ $mensaje->asunto }} </span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{ asset('storage/'.Auth::user()->foto) }}" />
                        <span class="username username-hide-on-mobile">@yield('user-name','Luis Mayta')  </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        @yield('menu-user','
                        <li>
                            <a href="page_user_profile_1.html">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="app_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="app_inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox
                                <span class="badge badge-danger"> 3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="app_todo.html">
                                <i class="icon-rocket"></i> My Tasks
                                <span class="badge badge-success"> 7 </span>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="page_user_lock_1.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="page_user_login_1.html">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                        ')
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>