@extends('layouts.member.q')

@section('title')
    راه اندازی اولیه
@endsection

@section('content')
    <div class="nk-content">
        <div class="nk-split nk-split-page nk-split-lg">
            <!-- .nk-split-content -->


            <div class="nk-split-content nk-split-stretch bg-primary-dim p-5 d-flex justify-center align-center flex-column">
                <div class="wide-xs-fix">

                    <div class="card bg-white">
                        <div class="card-header">شروع به کار</div>
                        <div class="card-inner">
{{--                            <h5 class="card-title">تنظیمات اولیه</h5>--}}
                            <form class="nk-stepper stepper-init is-alter" method="post" action="{{ route('setup') }}" id="sform" data-step-current="first" novalidate="novalidate" style="display: block;">
                                @csrf
                                <div class="nk-stepper-content">
                                    <div class="nk-stepper-progress stepper-progress mb-4">
                                        <div class="stepper-progress-count mb-2">1 از 5</div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar stepper-progress-bar" style="width: 20%;"></div>
                                        </div>
                                    </div>
                                    <div class="nk-stepper-steps stepper-steps">
                                        <div class="nk-stepper-step active">
                                            <h5 class="title mb-3">نام گروه</h5>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="group_name">نامی که به آن شناخته می شوید.</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="group_name" name="group_name" placeholder="چشم انتظار" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-stepper-step">
                                            <h5 class="title mb-3">نام مسابقه</h5>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="mosabeghe_name"></label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="mosabeghe_name" name="mosabeghe_name" placeholder="مسابقه غدیر" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-stepper-step">
                                            <h4 class="title mb-3">صفحه خوش آمد گویی قبل از ورود به برنامه</h4>
                                            <h6 class="title mb-3">زمانی که برنامه فعال است:</h6>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="welcome_text">متن</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="form-control" id="welcome_text" name="welcome_text" placeholder="به مسابقه چشم انتظار خوش آمدید." required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="welcome_btn">متن دکمه</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="welcome_btn" name="welcome_btn" placeholder="ورود به برنامه" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <h6 class="title mb-3">زمانی که برنامه غیر فعال است:</h6>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="welcome_text_off">متن</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="form-control" id="welcome_text_off" name="welcome_text" placeholder="برنامه فعال نمی باشد." required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-stepper-step">
                                            <h5 class="title mb-3">صفحه شروع مسابقه</h5>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h6>زمانی که مسابقه غیر فعال است:</h6>
                                                        <label class="form-label" for="off_start_text">متن</label>
                                                        <div class="form-control-wrap">
                                                            <textarea  class="form-control" id="off_start_text" name="off_start_text" placeholder="مثلاً: لطفاً منتظر بمانید تا مسابقه شروع شود." required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h6>زمانی که مسابقه فعال است:</h6>
                                                        <label class="form-label" for="enable_start_title">عنوان</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="enable_start_title" name="enable_start_title" placeholder="مسابقه غدیر" required="">
                                                        </div>
                                                        <label class="form-label" for="enable_start_text">متن</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="enable_start_text" name="enable_start_text" placeholder="آماده مسابقه هستید؟" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="start_btn">متن دکمه شروع</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="start_btn" name="start_btn" placeholder="شروع مسابقه" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-stepper-step">
                                            <h5 class="title mb-3">تنظیمات مربوط به صندلی ها</h5>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h6>در صفحه صندلی ها</h6>
                                                        <label class="form-label" for="chair_count">تعداد صندلی ها</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="chair_count" name="chair_count" placeholder="مثلاً 30" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="chair_column">تعداد ستون صندلی ها</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="chair_column" name="chair_column" placeholder="مثلاً 6" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-stepper-step">
                                            <div class="pt-4 pb-2">
                                                <em class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>
                                                <h5 class="title mb-2">تنظیمات اولیه تکمیل شدند</h5>
                                                <p>لطفاً دکمه ارسال را بزنید تا تغییرات ثبت شوند</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                        <li class="step-prev" style="display: none;"><button class="btn btn-dim btn-primary">بازگشت</button></li>
                                        <li class="step-next" style="display: block;"><button class="btn btn-primary">ادامه</button></li>
                                        <li class="step-submit" onclick="event.preventDefault();
                                                     document.getElementById('sform').submit();" style="display: none;"><button type="submit" class="btn btn-primary">ثبت</button></li>

                                    </ul>

{{--                                   <button class="btn btn-primary">ار333سال</button>--}}
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <!-- .nk-split-content -->
        </div>
        <!-- .nk-split -->
    </div>
@endsection
