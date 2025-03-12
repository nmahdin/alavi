@extends('layouts.member.q')

@section('title')
    ثبت نام مدیر
@endsection

@section('content')

    <div class="nk-block nk-block-middle">
        <div class=" nk-split-stretch d-flex justify-center align-center flex-column">
            <div class="wide-xs-fix">

                <div class="card bg-white">
                    <div class="card-header">ثبت نام مدیر</div>
                    <div class="card-inner">
                        <p>ثبت نام ادمین برای دسترسی به پنل ادمین</p>
                        @foreach($errors as $error)
                            <span class="invalid">{{ $error }}</span>
                        @endforeach
                        <form method="post" action="{{ route('admin.register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="name">نام</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg @error('name') error @enderror" name="name" value="{{ old('name') }}" id="name" required autofocus autocomplete="username" placeholder="نام وارد کنید">
                                    @error('name')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="number">نام کاربری</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg @error('number') error @enderror" name="number" value="{{ old('number') }}" id="number" required autofocus autocomplete="username" placeholder="نام کابری وارد کنید">
                                    @error('number')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">رمز عبور</label>
                                <div class="form-control-wrap">
                                    <input type="password" class="form-control form-control-lg @error('password') error @enderror" name="password" value="{{ old('password') }}"  id="password" required autofocus autocomplete="username" placeholder="رمز عبور وارد کنید">
                                    @error('password')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="number">تکرار رمز عبور</label>
                                <div class="form-control-wrap">
                                    <input type="password" class="form-control form-control-lg @error('password_confirmation') error @enderror" name="password_confirmation"  id="password_confirmation" required autofocus autocomplete="username" placeholder="رمز عبور را مجدد تکرار کنید">
                                    @error('password_confirmation')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if(!session('setup'))
                                <div class="form-group">
                                    <div class="custom-control custom-switch custom-control-lg">
                                        <input
                                        type="checkbox"
                                               class="custom-control-input"
                                               id="full_admin" name="full_admin">
                                        <label class="custom-control-label" for="full_admin">مدیر ساده / مدیر کل</label>
                                    </div>
                                </div>
                            @else
                                <input type="text" style="display: none" name="full_admin" id="full_admin" value="@if(session('setup')) 1 @endif">
                            @endif

                            @if( session('setup') ) {{ Session::flash('setup') }} @endif
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block">ثبت نام</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title"></h5>
                <div class="nk-block-des">

                </div>
            </div>
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


