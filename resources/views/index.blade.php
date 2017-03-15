@extends('layouts.base')

@section('content')
{!! Alert::render() !!}
@include('alerts.errors')
<div class="row">
    <div class="col-md-3">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ route('datos.index') }}">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >DATOS</span>
                </div>
                <div class="desc"> Datos Personales </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 ">
        <a class="dashboard-stat dashboard-stat-v2 red" href="{{ route('pagos.index') }}">
            <div class="visual">
                <i class="fa fa-dollar"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >PAGO</span></div>
                <div class="desc"> Formatos de pagos </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 ">
        <a class="dashboard-stat dashboard-stat-v2 green" href="{{ route('ficha.index') }}">
            <div class="visual">
                <i class="fa fa-file-pdf-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >FICHA</span>
                </div>
                <div class="desc"> Ficha de inscripción </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 ">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >RESULTADOS</span> </div>
                <div class="desc"> Resultados de tu evaluación </div>
            </div>
        </a>
    </div>
</div>
<div class="row widget-row">
    <div class="col-md-4 margin-bottom-20">
        <!-- BEGIN WIDGET TAB -->
        <div class="widget-bg-color-white widget-tab">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" data-toggle="tab"> All Posts </a>
                </li>
                <li>
                    <a href="#tab_1_2" data-toggle="tab"> Designers </a>
                </li>
                <li>
                    <a href="#tab_1_3" data-toggle="tab"> Developers </a>
                </li>
                <li>
                    <a href="#tab_1_4" data-toggle="tab"> Others </a>
                </li>
            </ul>
            <div class="tab-content scroller" style="height: 350px;" data-always-visible="1" data-handle-color="#D7DCE2">
                <div class="tab-pane fade active in" id="tab_1_1">
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Wondering anyone did this
                                <span class="label label-default"> March 25 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">New Workstation
                                <span class="label label-default"> March 16 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">San Francisco
                                <span class="label label-default"> March 10 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Wondering anyone did this
                                <span class="label label-default"> March 25 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">New Workstation
                                <span class="label label-default"> March 16 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Wondering anyone did this
                                <span class="label label-default"> March 25 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Most Completed theme
                                <span class="label label-default"> March 12 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_1_2">
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">New Workstation
                                <span class="label label-default"> March 16 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Wondering anyone did this
                                <span class="label label-default"> March 25 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Most Completed theme
                                <span class="label label-default"> March 12 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">San Francisco
                                <span class="label label-default"> March 10 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_1_3">
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Most Completed theme
                                <span class="label label-default"> March 12 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">San Francisco
                                <span class="label label-default"> March 10 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Wondering anyone did this
                                <span class="label label-default"> March 25 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">New Workstation
                                <span class="label label-default"> March 16 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_1_4">
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">San Francisco
                                <span class="label label-default"> March 10 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">New Workstation
                                <span class="label label-default"> March 16 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/05.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Most Completed theme
                                <span class="label label-default"> March 12 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                    <div class="widget-news">
                        <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title">Wondering anyone did this
                                <span class="label label-default"> March 25 </span>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END WIDGET TAB -->
    </div>
    <div class="col-md-4">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption caption-md font-blue">
                    <i class="icon-share font-blue"></i>
                    <span class="caption-subject theme-font bold uppercase">Recent Activities</span>
                </div>
                <div class="actions">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                            <label>
                                <input type="checkbox"> Finance</label>
                            <label>
                                <input type="checkbox" checked=""> Membership</label>
                            <label>
                                <input type="checkbox"> Customer Support</label>
                            <label>
                                <input type="checkbox" checked=""> HR</label>
                            <label>
                                <input type="checkbox"> System</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 322px;"><div class="scroller" style="height: 322px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible="0" data-initialized="1">
                    <ul class="feeds">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                <i class="fa fa-share"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-danger">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-default">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-default "> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                <i class="fa fa-share"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-default">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-warning">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-default "> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 201px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 120.985px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                <div class="scroller-footer">
                    <div class="btn-arrow-link pull-right">
                        <a href="#">See All Records</a>
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget widget-comments">
            <div class="portlet-title margin-bottom-20">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase">Quick Email</span>
                </div>
            </div>
            <div class="portlet-body overflow-h">
                <input type="text" placeholder="To" class="form-control margin-bottom-20">
                <input type="text" placeholder="Subject" class="form-control margin-bottom-20">
                <textarea placeholder="Message" class="form-control margin-bottom-20" rows="5"></textarea>
                <button class="btn red-sunglo pull-right" type="button">Submit</button>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@stop


