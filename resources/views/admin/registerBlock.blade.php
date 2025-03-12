@extends('layouts.main')

@section('title')
    ثبت نام ادمین
@endsection

@section('body')
    <div class="absolute-top-right d-lg-none p-3 p-sm-5">
        <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                class="icon ni ni-info"></em></a>
    </div>
    <div class="nk-block nk-block-middle nk-auth-body">
        <div class="alert alert-fill alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em>
            <strong>
                امکان ثبت نام برای ادمین وجود ندارد.
            </strong><br>
            از طریق پنل ادمین امکان ثبت نام را فعال نمایید.

        </div>
        <!-- .nk-block-head -->

        <!-- form -->
    </div>
    <!-- .nk-block -->

    <!-- nk-block -->
@endsection

{{--<form method="POST" action="{{ route('login') }}">--}}
{{--    @csrf--}}
{{--    <input id="name" type="text" name="name"  required autofocus autocomplete="username" />--}}
{{--<input id="number" type="text" name="number"  required autofocus autocomplete="username" />--}}
{{--<input style="display: none" id="password" type="password" name="password" value="12345678" required autocomplete="current-password" />--}}
{{--<input style="display: none" id="password_confirmation" type="password" name="password_confirmation" value="12345678" required autocomplete="current-password" />--}}
{{--    <button>send</button>--}}
{{--</form>--}}


