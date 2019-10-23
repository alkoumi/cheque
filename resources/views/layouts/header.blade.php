<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>برنامج الطلبات الإدارية - مكتب الدعوة بالجبيل</title>
{{--    {!! Charts::assets() !!}--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN LAYOUT FIRST STYLES -->
    {{--<link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />--}}
    <!-- END LAYOUT FIRST STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{--<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />--}}
    <link href="{{ asset("/assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/global/plugins/uniform/css/uniform.default.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/global/plugins/select2/css/select2.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/global/plugins/select2/css/select2-bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    @yield('headerCss')
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset("/assets/global/css/components-md-rtl.min.css") }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset("/assets/global/css/plugins-md-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset("/assets/layouts/layout5/css/layout-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/layouts/layout5/css/custom-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/global/css/sweetalert.css") }}" rel="stylesheet" type="text/css" >

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" />
    <style>
        @-webkit-keyframes flashing {
            from { background-color: red; }
            to { background-color: inherit; }
        }
        @-moz-keyframes flashing {
            from { background-color: red; }
            to { background-color: inherit; }
        }
        @-o-keyframes flashing {
            from { background-color: red; }
            to { background-color: inherit; }
        }
        @keyframes flashing {
            from { background-color: red; }
            to { background-color: inherit; }
        }
        .flashing {
            -webkit-animation: flashing 1s infinite; /* Safari 4+ */
            -moz-animation:    flashing 1s infinite; /* Fx 5+ */
            -o-animation:      flashing 1s infinite; /* Opera 12+ */
            animation:         flashing 1s infinite; /* IE 10+ */
        }
    </style>
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-md">
<!-- BEGIN CONTAINER -->
<div class="wrapper">
    <!-- BEGIN HEADER -->
    <header class="page-header">
        <nav class="navbar mega-menu" role="navigation">
            <div class="container-fluid">
                <div class="clearfix navbar-fixed-top">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                    </button>
                    <!-- End Toggle Button -->
                    <!-- BEGIN LOGO -->
                    <a id="index" class="page-logo" href={{ url('/') }}>
                        <img src="{{ asset("assets/pages/img/logophoto.jpg") }}" alt="برنامج الطلبات الإدارية - مكتب الدعوة بالجبيل" style="border-radius: 10px">
                    </a>
                    <h4 style="color: #7bbbd6;margin-top: 15px">برنامج الطلبات الإدارية - مكتب الدعوة بالجبيل</h4>
                    {{--<div class="title" style="--}}
    {{--height: 50px;--}}
    {{--max-height: 50px;--}}
    {{--vertical-align: middle;">--}}
                        {{--<h3 style="color: #7bbbd6;margin-top: 15px">مكتبة مركز دعوة الجاليات بالجبيل</h3>--}}
                    {{--</div>--}}

                    <!-- END LOGO -->
                    <!-- BEGIN SEARCH -->
                    {{--<form class="search" action="" method="">--}}
                        {{--<input type="name" class="form-control" name="query" placeholder="مكتبة مركز دعوة الجاليات بالجبيل" disabled="disabled">--}}
                        {{--<a href="javascript:;" class="btn submit">--}}
                            {{--<i class="fa fa-search"></i>--}}
                        {{--</a>--}}
                        {{--<h3 style="color: #7bbbd6;margin: 0 0 0 0;">مكتبة مركز دعوة الجاليات بالجبيل</h3>--}}
                    {{--</form>--}}
                    <!-- END SEARCH -->
                    <!-- BEGIN TOPBAR ACTIONS -->
                    <div class="topbar-actions" style="vertical-align: middle">
{{--                       <span style="color: #000000 ; font-size: 15px;background-color: #ffffff ;padding: 5px">{{ Number::int2indic(Hijri::date('l ، j F ، Y')) }} هـ</span>--}}
                       <span style="color: #000000 ; font-size: 15px;background-color: #ffffff ;padding: 5px">{{ \Abuhamidah\Number\Number::int2indic(\Abuhamidah\Hijri\Hijri::date('l ، j F ، Y'))  }} هـ</span>

                        <span style="color: #ffffff">|</span>
                        <!-- BEGIN GROUP NOTIFICATION -->
                        {{--<div class="btn-group-notification btn-group" id="header_notification_bar"> {{ Number::int2indic(Hijri::date('j F - Y')) }}--}}
                            {{--<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                                {{--<i class="icon-bell"></i>--}}
                                {{--<span class="badge">7</span>--}}
                            {{--</button>--}}
                            {{--<ul class="dropdown-menu-v2">--}}
                                {{--<li class="external">--}}
                                    {{--<h3>--}}
                                        {{--<span class="bold">12 pending</span> notifications</h3>--}}
                                    {{--<a href="#">view all</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-success">--}}
                                                                {{--<i class="fa fa-plus"></i>--}}
                                                            {{--</span> New user registered. </span>--}}
                                                {{--<span class="time">just now</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-danger">--}}
                                                                {{--<i class="fa fa-bolt"></i>--}}
                                                            {{--</span> Server #12 overloaded. </span>--}}
                                                {{--<span class="time">3 mins</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-warning">--}}
                                                                {{--<i class="fa fa-bell-o"></i>--}}
                                                            {{--</span> Server #2 not responding. </span>--}}
                                                {{--<span class="time">10 mins</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-info">--}}
                                                                {{--<i class="fa fa-bullhorn"></i>--}}
                                                            {{--</span> Application error. </span>--}}
                                                {{--<span class="time">14 hrs</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-danger">--}}
                                                                {{--<i class="fa fa-bolt"></i>--}}
                                                            {{--</span> Database overloaded 68%. </span>--}}
                                                {{--<span class="time">2 days</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-danger">--}}
                                                                {{--<i class="fa fa-bolt"></i>--}}
                                                            {{--</span> A user IP blocked. </span>--}}
                                                {{--<span class="time">3 days</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-warning">--}}
                                                                {{--<i class="fa fa-bell-o"></i>--}}
                                                            {{--</span> Storage Server #4 not responding dfdfdfd. </span>--}}
                                                {{--<span class="time">4 days</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-info">--}}
                                                                {{--<i class="fa fa-bullhorn"></i>--}}
                                                            {{--</span> System Error. </span>--}}
                                                {{--<span class="time">5 days</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="javascript:;">--}}
                                                        {{--<span class="details">--}}
                                                            {{--<span class="label label-sm label-icon label-danger">--}}
                                                                {{--<i class="fa fa-bolt"></i>--}}
                                                            {{--</span> Storage server failed. </span>--}}
                                                {{--<span class="time">9 days</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <!-- END GROUP NOTIFICATION -->
                        <!-- BEGIN GROUP INFORMATION -->
                        {{--<div class="btn-group-red btn-group">--}}
                            {{--<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="" data-hover="" data-close-others="true">--}}
                                {{--<i class="fa fa-clock-o"></i>--}}
                            {{--</button>--}}
                            {{--<ul class="dropdown-menu-v2" >--}}
                                {{--<li class="active">--}}
                                    {{--<a href="#">New Post</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">New Comment</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Share</a>--}}
                                {{--</li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Comments--}}
                                        {{--<span class="badge badge-success">4</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Feedbacks--}}
                                        {{--<span class="badge badge-danger">2</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <!-- END GROUP INFORMATION -->
                        <!-- BEGIN USER PROFILE -->
                        <div class="btn-group-img btn-group">
{{--                            <img src="/upload/avatars/{{ Auth::user()->avatar }}" alt="" style="width: 75px;height: 75px"><br>--}}
                            <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span>أهلًا ، {{ (Auth::check()) ? Auth::user()->first_name .' '. Auth::user()->last_name : 'لا يوجد مستخدم' }} </span>
                                <img src="{{ asset("/upload/avatars/") }}/{{ Auth::user()->avatar }}" alt="">
                            </button>
                            <ul class="dropdown-menu-v2" role="menu">
                                <li>
                                 <center><img src="{{ asset("/upload/avatars/") }}/{{ Auth::user()->avatar }}" alt="" style="width: 200px;height: 200px;border-radius: 10px;"></center>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a>
                                        <i class="icon-shield"> </i> المستوى : @if(Auth::check())<span class="label label-primary"> {{ Auth::user()->level->level_name }} </span>@elseلا يوجد مستخدم@endif
                                        {{--<span class="badge badge-danger">1</span>--}}
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href='{{url('profile')}}'>
                                        <i class="icon-user"> </i> حسابي
                                        {{--<span class="badge badge-danger">1</span>--}}
                                    </a>
                                </li>
                                @if(Auth::check())
                                    @if(Auth::user()->hasLevel('SAD'))
                                        <li class="divider"> </li>
                                        <li>
                                            <a href={{ url('/users') }}>
                                                <i class="icon-users"> </i> إدارة المستخدمين </a>
                                        </li>
                                    @endif
                                @endif

                                {{--<li>--}}
                                    {{--<a href="app_calendar.html">--}}
                                        {{--<i class="icon-calendar"></i> My Calendar </a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="app_inbox.html">--}}
                                        {{--<i class="icon-envelope-open"></i> My Inbox--}}
                                        {{--<span class="badge badge-danger"> 3 </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="app_todo_2.html">--}}
                                        {{--<i class="icon-rocket"></i> My Tasks--}}
                                        {{--<span class="badge badge-success"> 7 </span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <li class="divider"> </li>
                                <li>
                                    <a href={{ url('/lockscreen') }}>
                                        <i class="icon-lock"> </i> قفل وحماية </a>
                                </li>
                                <li>
                                    {{--<a href="{{ url('/logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--Logout--}}
                                    {{--</a>--}}

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-key"> </i> تسجيل الخروج
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END USER PROFILE -->
                        {{--<!-- BEGIN QUICK SIDEBAR TOGGLER -->--}}
                        {{--<button type="button" class="quick-sidebar-toggler" data-toggle="collapse">--}}
                            {{--<span class="sr-only">Toggle Quick Sidebar</span>--}}
                            {{--<i class="icon-logout"></i>--}}
                        {{--</button>--}}
                        {{--<!-- END QUICK SIDEBAR TOGGLER -->--}}
                    </div>
                    <!-- END TOPBAR ACTIONS -->
                </div>
                <!-- BEGIN HEADER MENU -->
                <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
{{--                        <li class="dropdown dropdown-fw @if(preg_match('/|users/i', Request::segment(0)))) active open selected @endif" >--}}
                        <li class="dropdown dropdown-fw @if(Request::segment(1) == null || Request::segment(1) == 'users')) active open selected @endif" >
                        {{--<li class="dropdown dropdown-fw active open selected">--}}
                            <a href="#" class="text-uppercase">
                                <i class="icon-home"></i>الرئيسة</a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="dropdown more-dropdown-sub{{ Request::is('/') ? ' active ' : '' }}" >
                                    <a href={{ url('/') }}>
                                        <i class="icon-bar-chart"></i> الرئيسية </a>
                                </li>
                                @if(Auth::check())
                                    @if(Auth::user()->hasLevel('SAD'))
                                        <li class="dropdown more-dropdown-sub {{ Request::is('users') ? ' active ' : '' }}" >
                                            <a href="{{ url('/users') }}">
                                                <i class="icon-user"></i> المستخدمون </a>
                                        </li>
                                    @endif
                                @endif
                                    {{--<a href="dashboard_3.html">--}}
                                        {{--<i class="icon-graph"></i> Dashboard 3 {{ Request::is('materials') ? ' active open selected ' : '' }}</a>--}}
                                {{--</li>--}}
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw @if(preg_match('/materials/i', Request::segment(1))) active open selected @endif" >
                            <a href="#" class="text-uppercase">
                                <i class="icon-book-open"></i>المواد</a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="dropdown more-dropdown-sub{{ Request::is('materials') ? ' active ' : '' }}" >
                                    <a href={{ url('/materials') }}>
                                        <i class="icon-book-open"></i> قائمة المواد بالمكتبة </a>
                                </li>
                                {{--<li class=" {{ Request::is('materials') ? ' active ' : '' }}" >--}}
                                    {{--<a href="#responsive2">--}}
                                        {{--<i class="icon-plus"></i> إضافة مادة جديدة </a>--}}
                                {{--</li>--}}
                                {{--@if(Auth::check())--}}
                                    {{--@if(Auth::user()->hasLevel('superAdmin'))--}}
                                        {{--<li class=" {{ Request::is('users') ? ' active ' : '' }}" >--}}
                                            {{--<a href="{{ url('/users') }}">--}}
                                                {{--<i class="icon-user"></i> المستخدمون </a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--@endif--}}
                                            {{--@endif--}}
                                            {{--<a href="dashboard_3.html">--}}
                                                {{--<i class="icon-graph"></i>{{ Request::is('entries') || Request::is('entries/i') ? ' active open selected ' : '' }} Dashboard 3 </a>--}}
                                        {{--</li>--}}
                            </ul>
                        </li>
                        {{--<li class="dropdown dropdown-fw @if(preg_match('/entries/i', Request::segment(1))) active open selected @endif">--}}
                            {{--<a href="{{ url('/entries') }}" class="text-uppercase">--}}
                                {{--<i class="icon-note"></i>التوريدات</a>--}}
                            {{--<ul class="dropdown-menu dropdown-menu-fw ">--}}
                                {{--<li class="dropdown {{ Request::is('entries') ? ' active ' : '' }}">--}}
                                    {{--<a href={{ url('/entries') }}>--}}
                                        {{--<i class="icon-cloud-download"></i>  أوامر التوريد للمكتبة </a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li class="dropdown dropdown-fw  @if(preg_match('/GetLowStocks|stocks|stores/i', Request::segment(1))
                                                             ) active open selected @endif">
                            <a href="#" class="text-uppercase">
                                <i class="icon-layers"></i>المستودعات</a>
                            <ul class="dropdown-menu dropdown-menu-fw ">
                                <li class="dropdown more-dropdown-sub{{ Request::is('stores') || preg_match('/stores/i', Request::segment(1)) ? ' active ' : '' }}">
                                    <a href="{{ url('/stores') }}"><i class="fa fa-archive"></i> إدارة المعارض و المخازن والمستودعات</a>
                                </li>
                                <li class="dropdown more-dropdown-sub{{ Request::is('stocks')  ? ' active ' : '' }}">
                                    <a href="{{ url('/stocks') }}" ><i class="icon-layers"></i> رفوف المواد وكمياتها </a>
                                </li>
                                <li class="dropdown more-dropdown-sub{{ Request::is('GetLowStocks') ? ' active ' : '' }}">
                                    <a href="{{ url('/GetLowStocks') }}"><i class="icon-bell"></i> تقرير نواقص المواد بالمكتبة </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw  @if(
                                                             preg_match('/stockOrders|stockItems/i', Request::segment(1)) ||
                                                             preg_match('/stockItemsReport/i', Request::segment(1)) ||
                                                             preg_match('/stockExcelReport/i', Request::segment(1))
                                                             ) active open selected @endif">
                            <a href="#" class="text-uppercase">
                                <i class="fa fa-database"></i>التخزين</a>
                            <ul class="dropdown-menu dropdown-menu-fw ">
                                <li class="dropdown more-dropdown-sub{{ Request::is('stockOrders') || Request::is('stockItemsReport') || preg_match('/stockOrders/i', Request::segment(1)) ? ' active ' : '' }}">
                                    <a href="{{ url('/stockOrders') }}"><i class="fa fa-database"></i> عمليات الحفظ والتخزين </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw  @if(
                                                             preg_match('/dists|dist_items/i', Request::segment(1)) ||
                                                             preg_match('/distItemsReport/i', Request::segment(1)) ||
                                                             preg_match('/distExcelReport/i', Request::segment(1))
                                                             ) active open selected @endif">
                            <a href="#" class="text-uppercase">
                                <i class="fa fa-paper-plane"></i>التوزيع</a>
                            <ul class="dropdown-menu dropdown-menu-fw ">
                                <li class="dropdown more-dropdown-sub{{ Request::is('dists') || Request::is('distItemsReport') || preg_match('/dists/i', Request::segment(1)) ? ' active ' : '' }}">
                                    <a href="{{ url('/dists') }}"><i class="fa fa-paper-plane"></i> عمليات الصرف والتوزيع </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw  @if(
                                                             preg_match('/GetEndedBorrows|borrowOrders|borrowItems/i', Request::segment(1))
                                                             ) active open selected @endif">
                            <a href="#" class="text-uppercase">
                                <i class="fa fa-recycle"></i>الإعارات</a>
                            <ul class="dropdown-menu dropdown-menu-fw ">
                                <li class="dropdown more-dropdown-sub {{ Request::is('borrowOrders') ? ' active ' : '' }}">
                                    <a href="{{ url('/borrowOrders') }}"><i class="fa fa-recycle"></i> عمليات الإستعارة </a>
                                </li>
                                <li class="dropdown more-dropdown-sub {{ Request::is('GetEndedBorrows') ? ' active ' : '' }}">
                                    <a href="{{ url('/GetEndedBorrows') }}"><i class="icon-bell"></i> تقرير المواد المنتهية مدة إعارتها </a>
                                </li>
                            </ul>
                        </li>

                        {{--</li>--}}
                        <li class="dropdown dropdown-fw @if(preg_match('/categories/', Request::segment(1)) ||
                                                            preg_match('/movingWays/', Request::segment(1)) ||
                                                            preg_match('/subjects/', Request::segment(1)) ||
                                                            preg_match('/languages/', Request::segment(1)) ||
                                                            preg_match('/nationalities/', Request::segment(1))||
                                                            preg_match('/presses/', Request::segment(1))||
                                                            preg_match('/publishers/', Request::segment(1)) ||
                                                            preg_match('/pdfBooks/', Request::segment(1)) ||
                                                            preg_match('/authors/', Request::segment(1)) ||
                                                            preg_match('/translators/', Request::segment(1)) ||
                                                            preg_match('/targets/', Request::segment(1))
                                                            ) active open selected @endif">
                            <a href="#" class="text-uppercase"><i class="icon-list"></i>المساندة</a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li class="dropdown more-dropdown-sub {{ Request::is('categories') || Request::is('subjects') ? ' active ' : '' }} ">
                                    <a href="#"><i class="icon-layers"></i>الأصناف والموضوعات</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ url('/categories') }}"><i class="icon-layers"></i> أصناف المواد</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/subjects') }}"><i class="icon-docs"></i> موضوعات المواد </a>
                                        </li>
                                    </ul>
                                </li>
                                {{--<li>--}}
                                    {{--<a href="{{ url('/stores') }}"><i class="icon-plus"></i> إدارة المستودعات </a>--}}
                                {{--</li>--}}
                                <li class="dropdown {{ Request::is('movingWays') ? ' active ' : '' }} ">
                                    <a href="{{ url('/movingWays') }}"><i class="icon-layers"></i>الحركة</a>
                                </li><li class="divider"> </li>
                                <li class="dropdown more-dropdown-sub {{ Request::is('presses') || Request::is('publishers') || Request::is('pdfBooks') ? ' active ' : '' }} ">
                                    <a href="#"><i class="icon-printer"></i>المطابع و النشر </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ url('/presses') }}"><i class="icon-printer"></i> المطابع </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/publishers') }}"><i class="icon-note"></i> دور النشر </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/pdfBooks') }}"><i class="fa fa-book"></i> الكتب الالكترونية </a>
                                        </li>
                                    </ul>
                                </li>
                                {{--<li>--}}
                                    {{--<a href="{{ url('/subjects') }}"><i class="icon-docs"></i> موضوعات المواد </a>--}}
                                {{--</li>--}}
                                <li class="dropdown more-dropdown-sub {{ Request::is('authors') || Request::is('translators') ? ' active ' : '' }} ">
                                    <a href="#"><i class="icon-printer"></i>التأليف والترجمة</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ url('/authors') }}"><i class="icon-book-open"></i>المؤلفون</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/translators') }}"><i class="icon-earphones-alt"></i>المترجمون</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown {{ Request::is('targets') ? ' active ' : '' }} ">
                                    <a href="{{ url('/targets') }}"><i class="icon-target"></i>المستهدفون</a>
                                </li><li class="divider"> </li>
                                <li class="dropdown more-dropdown-sub {{ Request::is('languages') || Request::is('nationalities') ? ' active ' : '' }} ">
                                    <a href="#"><i class="icon-layers"></i>اللغات والجنسيات</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ url('/languages') }}"><i class="icon-layers"></i> اللغات </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/nationalities') }}"><i class="icon-docs"></i> الجنسيات </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw  @if(
                                                             preg_match('/instructions/i', Request::segment(1))
                                                             ) active open selected @endif">
                            <a href="{{url('/instructions')}}" style="">
                                <i class="fa fa-cog fa-spin fa-3 " style="color: #E87E04;right: 0px;font-size: 23px"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!--/container-->
        </nav>
    </header>
    <!-- END HEADER -->