@extends('layouts.member.q')

@section('title')
    ورود به مسابقه
@endsection

@section('content')

    <div class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
        <div class="wide-xs-fix">

            <div class="card bg-lighter">
                <div class="card-header">ورود</div>
                <div class="card-inner">
                    <h5 class="card-title">ابتدا برای شرکت در مسابقه وارد شوید.</h5>

                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">نام</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg @error('name') error @enderror"
                                       value="{{ old('name') }}" id="name" name="name" required autofocus
                                       autocomplete="username" placeholder="نام خود را وارد کنید">
                                @error('name')
                                <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="chair_number">شماره صندلی</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg @error('chair_number') error @enderror"
                                       value="{{ old('chair_number') }}" id="chair_number" name="chair_number" required autofocus
                                       autocomplete="chair_number" placeholder="شماره صندلی خود را وارد کنید">
                                @error('chair_number')
                                <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="number">شماره تماس</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg @error('number') error @enderror"
                                       name="number" {{ old('number') }} id="number" required autofocus
                                       autocomplete="username" placeholder="شماره تماس خود را با 09.. وارد کنید">
                                @error('number')
                                <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <input style="display: none" id="password" type="password" name="password" value="12345678"
                               required autocomplete="current-password"/>
                        <input style="display: none" id="password_confirmation" type="password"
                               name="password_confirmation" value="12345678" required autocomplete="current-password"/>
                        <div class="form-group">
                            <button class="btn btn-lg btn-dim btn-dark btn-block">ورود</button>
                        </div>
                    </form>
                </div>
            </div>


            {{--                    <form class="nk-stepper stepper-init is-alter" action="{{ route('check') }}" method="post" id="stepper-survey-v1" data-step-current="3" novalidate="novalidate" style="display: block;">--}}
            {{--                        @csrf--}}
            {{--                        @method('post')--}}
            {{--                        <div class="nk-stepper-content">--}}
            {{--                            <div class="nk-stepper-progress stepper-progress mb-4">--}}
            {{--                                <div class="stepper-progress-count mb-2">3 از 5</div>--}}
            {{--                                <div class="progress progress-md">--}}
            {{--                                    <div class="progress-bar stepper-progress-bar" style="width: 60%;"></div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="nk-stepper-steps stepper-steps">--}}

            {{--                                <div class="nk-stepper-step done">--}}
            {{--                                    <span  style="color: #d2d2d2;size: 10px; padding-bottom: 10px !important; display: flex;">سوال شماره 1</span>--}}
            {{--                                    <h5 class="title mb-3">صورت سوال شماره 1</h5>--}}
            {{--                                    <ul class="custom-control-group flex-column align-start">--}}
            {{--                                            <li>--}}
            {{--                                                <div class="custom-control custom-radio">--}}
            {{--                                                    <input type="radio" class="custom-control-input valid" name="sv2-time-avilability" id="sv2-time-avilability-full" required="">--}}
            {{--                                                    <label class="custom-control-label" for="sv2-time-avilability-full">گزینه 1</label>--}}
            {{--                                                </div>--}}
            {{--                                            </li>--}}
            {{--                                            <li>--}}
            {{--                                                <div class="custom-control custom-radio">--}}
            {{--                                                    <input type="radio" class="custom-control-input valid" name="sv2-time-avilability" id="sv2-time-avilability-part" required="">--}}
            {{--                                                    <label class="custom-control-label" for="sv2-time-avilability-part">گزینه 2</label>--}}
            {{--                                                </div>--}}
            {{--                                            </li>--}}
            {{--                                            <li>--}}
            {{--                                                <div class="custom-control custom-radio checked">--}}
            {{--                                                    <input type="radio" class="custom-control-input valid" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required="">--}}
            {{--                                                    <label class="custom-control-label" for="sv2-time-avilability-freelance">گزینه 3</label>--}}
            {{--                                                </div>--}}
            {{--                                            </li>--}}
            {{--                                        </ul>--}}
            {{--                                </div>--}}

            {{--                                <div class="nk-stepper-step done">--}}
            {{--                                    <h5 class="title mb-3">صورت سوال شماره 2</h5>--}}
            {{--                                    <ul class="custom-control-group flex-column align-start">--}}
            {{--                                        <li>--}}
            {{--                                            <div class="custom-control custom-radio">--}}
            {{--                                                <input type="radio" class="custom-control-input valid" name="sv2-time-avilability2" id="sv2-time-avilability-full2" required="">--}}
            {{--                                                <label class="custom-control-label" for="sv2-time-avilability-full2">گزینه 1</label>--}}
            {{--                                            </div>--}}
            {{--                                        </li>--}}
            {{--                                        <li>--}}
            {{--                                            <div class="custom-control custom-radio">--}}
            {{--                                                <input type="radio" class="custom-control-input valid" name="sv2-time-avilability2" id="sv2-time-avilability-part2" required="">--}}
            {{--                                                <label class="custom-control-label" for="sv2-time-avilability-part2">گزینه 2</label>--}}
            {{--                                            </div>--}}
            {{--                                        </li>--}}
            {{--                                        <li>--}}
            {{--                                            <div class="custom-control custom-radio checked">--}}
            {{--                                                <input type="radio" class="custom-control-input valid" name="sv2-time-avilability2" id="sv2-time-avilability-freelance2" required="">--}}
            {{--                                                <label class="custom-control-label" for="sv2-time-avilability-freelance2">گزینه 3</label>--}}
            {{--                                            </div>--}}
            {{--                                        </li>--}}
            {{--                                    </ul>--}}
            {{--                                </div>--}}

            {{--                                @foreach($questions as $q)--}}
            {{--                                    <div class="nk-stepper-step done">--}}
            {{--                                        <span  style="color: #d2d2d2;size: 10px; padding-bottom: 10px !important; display: flex;">سوال شماره {{ $q->number }}</span>--}}
            {{--                                        <h5 class="title mb-3">{{ $q->text }}</h5>--}}
            {{--                                        <ul class="custom-control-group flex-column align-start">--}}
            {{--                                            <li>--}}
            {{--                                                <div class="custom-control custom-radio">--}}
            {{--                                                    <input type="radio" class="custom-control-input valid" value="1" name="{{ $q->id }}" id="{{ $q->id }}1" required="">--}}
            {{--                                                    <label class="custom-control-label" for="{{ $q->id }}1">{{ $q->g1 }}</label>--}}
            {{--                                                </div>--}}
            {{--                                            </li>--}}
            {{--                                            <li>--}}
            {{--                                                <div class="custom-control custom-radio">--}}
            {{--                                                    <input type="radio" class="custom-control-input valid" value="2" name="{{ $q->id }}" id="{{ $q->id }}2" required="">--}}
            {{--                                                    <label class="custom-control-label" for="{{ $q->id }}2">{{ $q->g2 }}</label>--}}
            {{--                                                </div>--}}
            {{--                                            </li>--}}
            {{--                                            <li>--}}
            {{--                                                <div class="custom-control custom-radio checked">--}}
            {{--                                                    <input type="radio" class="custom-control-input valid" value="3" name="{{ $q->id }}" id="{{ $q->id }}3" required="">--}}
            {{--                                                    <label class="custom-control-label" for="{{ $q->id }}3">{{ $q->g3 }}</label>--}}
            {{--                                                </div>--}}
            {{--                                            </li>--}}
            {{--                                            <li>--}}
            {{--                                                <div class="custom-control custom-radio checked">--}}
            {{--                                                    <input type="radio" class="custom-control-input valid" value="4" name="{{ $q->id }}" id="{{ $q->id }}4" required="">--}}
            {{--                                                    <label class="custom-control-label" for="{{ $q->id }}4">{{ $q->g4 }}</label>--}}
            {{--                                                </div>--}}
            {{--                                            </li>--}}
            {{--                                        </ul>--}}
            {{--                                    </div>--}}
            {{--                                @endforeach--}}
            {{--                                <!-- end -->--}}
            {{--                                <div class="nk-stepper-step">--}}
            {{--                                    <div class="pt-4 pb-2">--}}
            {{--                                        <em class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>--}}
            {{--                                        <h5 class="title mb-2">سوالات تکمیل شدند.</h5>--}}
            {{--                                        <p>با تشکر از وقت گذاری شما برای پاسخ گویی به سوالات.</p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">--}}
            {{--                                <li class="step-prev" style="display: block;"><button class="btn btn-dim btn-primary">بازگشت</button></li>--}}
            {{--                                <li class="step-next" style="display: block;"><button class="btn btn-primary">ادامه</button></li>--}}
            {{--                                <li class="step-submit" style="display: none;"><button type="submit" class="btn btn-primary">ارسال پاسخ ها</button></li>--}}
            {{--                            </ul>--}}
            {{--                        </div>--}}
            {{--                        <button type="submit" class="btn btn-primary">ارسال پاسخ ها</button>--}}
            {{--                    </form>--}}
        </div>
    </div>

{{--    <div class="absolute-top-right d-lg-none p-3 p-sm-5">--}}
{{--        <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em--}}
{{--                class="icon ni ni-info"></em></a>--}}
{{--    </div>--}}
{{--    <div class="nk-block nk-block-middle nk-auth-body">--}}
{{--        <div class="brand-logo pb-5">--}}
{{--            <a href="#" class="logo-link">--}}
{{--                <img class="logo-light logo-img logo-img-lg" src="/assets/images/logo.png"--}}
{{--                     srcset="/assets/images/logo.png 2x" alt="لوگو">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="nk-block-head">--}}
{{--            <div class="nk-block-head-content">--}}
{{--                <h5 class="nk-block-title">ورود</h5>--}}
{{--                <div class="nk-block-des">--}}
{{--                    <p>ورود به مسابقه</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- .nk-block-head -->--}}

{{--        <!-- form -->--}}
{{--    </div>--}}
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


