<html lang="fa" class="js"><head>
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
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css">
</head>

<body class="has-rtl nk-body ui-rounder npc-general pg-survey no-touch nk-nio-theme bg-danger-dim" dir="rtl">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
        @yield('content')

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
<script src="./assets/js/libs/tagify.js"></script>
<script src="./assets/js/jdate.js"></script>
<!-- select region modal -->

<!-- .modal -->

</body></html>
