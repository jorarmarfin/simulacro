<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Simulacro de Admision</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #7 for dashboard & statistics"
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        @include('layouts.partials.styles-mandatory')
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets/global/css/components-rounded.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('assets/layouts/layout7/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/layouts/layout7/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        @include('layouts.partials.styles-plugins')
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="clearfix">
                <!-- BEGIN BURGER TRIGGER -->
                <div class="burger-trigger">
                    <button class="menu-trigger">
                        <img src="{{ asset('assets/layouts/layout7/img/m_toggler.png') }}" alt=""> </button>
                    <div class="menu-overlay menu-overlay-bg-transparent">
                        <div class="menu-overlay-content">
                            <ul class="menu-overlay-nav text-uppercase">
                                <li>
                                    <a href="{{ route('home.index') }}">Inicio</a>
                                </li>
                                <li>
                                    <a href="{{ route('pagos.index') }}">Pagos</a>
                                </li>
                                <li>
                                    <a href="{{ route('datos.index') }}">Templates</a>
                                </li>
                                <li>
                                    <a href="{{ route('ficha.index') }}">Ficha</a>
                                </li>
                                <li>
                                    <a href="{{ route('resultados.index') }}">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-bg-overlay">
                        <button class="menu-close">&times;</button>
                    </div>
                    <!-- the overlay element -->
                </div>
                <!-- END NAV TRIGGER -->
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/layouts/layout7/img/logo-sim-2.png') }}" alt="logo" class="logo-default" /> </a>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                @include('layouts.partials.template-header')
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container page-content-inner page-container-bg-solid">
            <!-- BEGIN BREADCRUMBS -->
            <!-- Remove "hide" class from "breadcrumbs hide" DIV and "margin-top-30" class from below "container-fluid container-lf-space margin-top-30" DIV in order to use the page breadcrumbs -->
            <div class="breadcrumbs hide">
                <div class="container-fluid">
                    <h2 class="breadcrumbs-title">Dashboard</h2>
                    <ol class="breadcrumbs-list">
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Home</a>
                        </li>
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Features</a>
                        </li>
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Dashboard</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- END BREADCRUMBS -->
            <!-- BEGIN CONTENT -->
            <div class="container-fluid container-lf-space margin-top-30">
                <!-- BEGIN PAGE BASE CONTENT -->
                @yield('content')
                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->

        <!-- END QUICK SIDEBAR -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner container-fluid container-lf-space">
                <p class="page-footer-copyright"> Oficina Central de Admision OCAD
                    <a target="_blank" href="http://www.admision.uni.edu.pe">Admision - UNI</a> &nbsp;|&nbsp;
                    <a href="http://www.uni.edu.pe" title="Universidad Nacional de Ingenieria" target="_blank">Universidad Nacional de Ingenieria</a>
                </p>
            </div>
            <div class="go2top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN QUICK SIDEBAR TOGGLER -->

        <!-- END QUICK SIDEBAR TOGGLER -->
        <!-- BEGIN QUICK NAV -->

        <!-- END QUICK NAV -->
        <!-- BEGIN CORE PLUGINS -->
        @include('layouts.partials.js-core')
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('plugins-js')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src={{asset("assets/global/scripts/app.min.js")}} type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src={{asset("assets/layouts/layout7/scripts/layout.min.js")}} type="text/javascript"></script>
        <script src={{asset("assets/layouts/global/scripts/quick-sidebar.min.js")}} type="text/javascript"></script>
        <script src={{asset("assets/global/plugins/jquery.pulsate.min.js")}} type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $('.Pulsear').pulsate({
                color: "#bf1c56"
            });
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-8924368-2', 'auto');
          ga('send', 'pageview');

        </script>
        @yield('js-scripts')
    </body>

</html>