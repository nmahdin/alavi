<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/favicon.png">
    <!-- Page Title  -->
    <title>@yield('title')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/assets/css/dashlite.rtl.css">
    <link rel="stylesheet" href="/assets/css/mystyle.css">
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css">
</head>
<body class="has-rtl nk-body ui-rounder npc-general pg-auth no-touch nk-nio-theme" dir="rtl">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content">
                <div class="nk-split nk-split-page nk-split-lg">
                    @yield('body')
                        <!-- nk-split -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="/assets/js/bundle.js"></script>
<script src="/assets/js/scripts.js"></script>
<!-- select region modal -->

<!-- .modal -->

</body>
