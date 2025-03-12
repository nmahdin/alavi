<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/assets/images/favicon.png"/>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/assets/css/dashlite.rtl.css"/>
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css"/>
    <link id="skin-default" rel="stylesheet" href="/assets/css/mystyle.css"/>
    <!-- Page Title  -->
    <title>@yield('title') | چشم انتظار</title>
</head>

<body class="has-rtl nk-body ui-rounder has-sidebar" dir="rtl">

<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
        <!-- sidebar @s -->
        <div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
            <div class="nk-sidebar-element nk-sidebar-head" style="text-align: center;">
                <div class="nk-sidebar-brand" >
<br>
                        <h4  class="text-dark pt-1">
                            <span class="nk-menu-icon text-dark"><em class="icon ni ni-layout-fill"></em></span>
                            <span class="">نب لاین</span>
                        </h4>

                    <br>
{{--                    <a href="html/index.html" class="logo-link nk-sidebar-logo">--}}
{{--                        <img class="logo-light logo-img" src="/assets/images/logo.jpg" srcset="./images/logo2x.png 2x"--}}
{{--                             alt="لوگو"/>--}}
{{--                        <img class="logo-dark logo-img" src="/assets/images/logo.jpg"--}}
{{--                             srcset="./images/logo-dark2x.png 2x" alt="لوگوی تاریک"/>--}}
{{--                        <img class="logo-small logo-img logo-img-small" src="/assets/images/logo.jpg"--}}
{{--                             srcset="./images/logo-small2x.png 2x" alt="لوگوی کوچک"/>--}}
{{--                    </a>--}}
                </div>
                <div class="nk-menu-trigger me-n2">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                            class="icon ni ni-arrow-left"></em></a>
                </div>
            </div>
            <!-- .nk-sidebar-element -->
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-content">
                    <div class="nk-sidebar-menu" data-simplebar>
                        <ul class="nk-menu">
                            <!-- کاربران -->
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">داشبورد</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('members.all') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">لیست شرکت کنندگان</span>
                                </a>
                            </li>
{{--                            <li class="nk-menu-heading">--}}
{{--                                <h6 class="overline-title text-primary-alt">شرکت کنندگان</h6>--}}
{{--                            </li>--}}
{{--                            <li class="nk-menu-item has-sub">--}}
{{--                                <a href="#" class="nk-menu-link nk-menu-toggle">--}}
{{--                                    <span class="nk-menu-icon"><em class="icon ni ni-line-chart"></em></span>--}}
{{--                                    <span class="nk-menu-text">آمار شرکت کنندگان</span>--}}
{{--                                </a>--}}
{{--                                <ul class="nk-menu-sub">--}}
{{--                                    <li class="nk-menu-item">--}}
{{--                                        <a href="{{ route('members.all') }}" class="nk-menu-link"><span--}}
{{--                                                class="nk-menu-text">لیست شرکت کنندگان</span></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nk-menu-item">--}}
{{--                                        <a href="{{ route('members.data') }}" class="nk-menu-link"><span--}}
{{--                                                class="nk-menu-text">آمار کلی</span></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <!-- .nk-menu-sub -->--}}
{{--                            </li>--}}
                            <!-- سوالات -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">سوالات</h6>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                                    <span class="nk-menu-text">سوالات آنلاین</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('question.all') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">مشاهده همه سوالات</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('question.creat') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">افزودن سوال</span></a>
                                    </li>
                                </ul>
                                <!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item">
                                <a href="{{ route('question.config') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                                    <span class="nk-menu-text">مدیریت فعال سازی دور ها</span>
                                </a>
                            </li>
                            <!-- .nk-menu-item -->
                            @if(\Illuminate\Support\Facades\Auth::user()->full_admin)
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">مدیریت</h6>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                    <span class="nk-menu-text">تنظیمات</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('config.all') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">عمومی</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('config_question') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">سوالات</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('config.admins') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">لیست ادمین ها</span></a>
                                    </li>
                                </ul>
                                <!-- .nk-menu-sub -->
                            </li>
                            @endif

                            <!-- .nk-menu-item -->
                        </ul>
                        <!-- .nk-menu -->
                    </div>
                    <!-- .nk-sidebar-menu -->
                </div>
                <!-- .nk-sidebar-content -->
            </div>
            <!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap">
            <!-- main header @s -->
            <div class="nk-header is-light nk-header-fixed is-light">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                    class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                            <a href="#" class="logo-link">
                                <img class="logo-light logo-img" src="/images/logo.jpg" alt="لوگو1"/>
                                {{--                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="لوگوی تاریک" />--}}
                            </a>
                        </div>
                        <!-- .nk-header-brand -->
                        <div class="nk-header-menu is-light">
                            <div class="nk-header-menu-inner">
                                <!-- Menu -->
                                <ul class="nk-menu nk-menu-main">
                                    <!-- لینک های نوار بالا -->
{{--                                    <li class="nk-menu-item has-sub">--}}
{{--                                        <a href="#" class="nk-menu-link nk-menu-toggle">--}}
{{--                                            <span class="nk-menu-text">دسترسی سریع</span>--}}
{{--                                        </a>--}}
{{--                                        <ul class="nk-menu-sub">--}}
{{--                                            <li class="nk-menu-item">--}}
{{--                                                <a href="#" class="nk-menu-link">--}}
{{--                                                    <span class="nk-menu-text">مشاهده لیست پاسخ دهنده ها</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <!-- .nk-menu-item -->--}}
{{--                                            <li class="nk-menu-item">--}}
{{--                                                <a href="{{ route('question.all') }}" class="nk-menu-link">--}}
{{--                                                    <span class="nk-menu-text">نمایش سوالات</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <!-- .nk-menu-item -->--}}
{{--                                            <li class="nk-menu-item">--}}
{{--                                                <a href="{{ route('question.creat') }}" class="nk-menu-link">--}}
{{--                                                    <span class="nk-menu-text">افزودن سوال</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <!-- .nk-menu-sub -->--}}
{{--                                    </li>--}}
                                    <li class="nk-menu-item">
                                        <a href="{{ route('question.creat') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">افزودن سوال</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('config.all') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">تنظیمات عمومی</span>
                                        </a>
                                    </li>

                                    <!-- .nk-menu-item -->
                                </ul>
                                <!-- Menu -->
                            </div>
                        </div>
                        <!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <!-- .dropdown -->
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-fill"></em>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <em class="icon ni ni-user-fill-c" style="font-size: 47px;"></em>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{ Illuminate\Support\Facades\Auth::user()->name; }}</span>
                                                    <span class="sub-text">خوش آمدید</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('config.user' , ['user' => Illuminate\Support\Facades\Auth::user()->id]) }}"><em class="icon ni ni-user-alt"></em><span>مشاهده تنظیمات ادمین</span></a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    {{--                                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
                                                    {{--                                                       onclick="event.preventDefault();--}}
                                                    {{--                                                     document.getElementById('logout-form').submit();">--}}
                                                    {{--                                                        {{ __('Logout') }}--}}
                                                    {{--                                                    </a>--}}
                                                    <a class="link-danger" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em
                                                            class="icon ni ni-signout"></em><span>خروج</span></a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- .nk-header-tools -->
                    </div>
                    <!-- .nk-header-wrap -->
                </div>
                <!-- .container-fliud -->
            </div>
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-body">
                        @yield('body')
                        <br>
                        <!-- .nk-ibx -->
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer">
                <div class="container-xl wide-xl">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright">© تمام حقوق محفوظ است. گروه چشم انتظار.</div>
                        <div class="nk-footer-links">
                            <span class="text-primary">
                            {{ \App\Models\AdminConfigs::where('name', 'v')->first()->config }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>

<script src="/assets/js/bundle.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/libs/tagify.js"></script>
<script src="./assets/js/libs/datatable-btns.js"></script>


</body>

@yield('script')
<script>
    function loading(id) {
        document.getElementById(id).innerText = 'درحال بارگذاری ...';

    }
</script>
</html>

