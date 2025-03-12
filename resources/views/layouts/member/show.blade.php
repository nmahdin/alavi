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

