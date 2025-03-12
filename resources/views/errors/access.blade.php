@extends('layouts.errors.main')

@section('title')
    خطای اجازه دسترسی
@endsection


@section('content')

    <div class="absolute-top-right d-lg-none p-3 p-sm-5">
        <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
    </div>

    <div class="nk-block nk-block-middle nk-auth-body">
        <div class="alert alert-fill alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em>
            امکان دسترسی به این صفحه وجود ندارد!
            </div>
{{--        <div class="brand-logo pb-5">--}}
{{--            <a href="#" class="logo-link">--}}
{{--                <img class="logo-light logo-img logo-img-lg" src="/assets/images/logo.png" srcset="/assets/images/logo.png 2x" alt="لوگو">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="nk-block-head">--}}
{{--            <div class="nk-block-head-content">--}}
{{--                <div class="alert alert-fill alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>به روز رسانی انجام نشد</strong>! برخی مشکلات فنی وجود دارد.</div>--}}
{{--                <h5 class="nk-block-title">ورود ادمین</h5>--}}
{{--                <div class="nk-block-des">--}}
{{--                    <p>ورود ادمین برای دسترسی به پنل ادمین</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- .nk-block-head -->
    </div>
@endsection
