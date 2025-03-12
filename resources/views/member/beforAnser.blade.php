@extends('layouts.member.q')

@section('title')
    پاسخ گویی به سوالات
@endsection

@section('content')
    <div class="nk-content">
        <div class="nk-split nk-split-page nk-split-lg">
            <div class="nk-split-content bg-dark is-dark p-5 d-flex justify-between flex-column text-center w-50">
                <a href="html/index.html" class="logo-link nk-sidebar-logo">
                    <img class="logo-light logo-img" style="max-height: 100px !important;" src="/assets/images/logo.jpg" srcset="/assets/images/logo.jpg" alt="لوگو">
                </a>
                <div class="text-block">
                    <img class="nk-survey-gfx mb-5" src="/assets/images/gfx/survey.svg" alt="">
                    <h3 class="text-white">پاسخ گویی به سوالات</h3>
                    <p>تصحیح تمام سوالات به صورت اتوماتیک انجام می شود.</p>
                </div>
                <p>© تمام حقوق محفوظ است. گروه چشم انتظار</p>
            </div>
            <!-- .nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
                <div class="wide-xs-fix">
                    <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-survey-v1" data-step-current="3" novalidate="novalidate" style="display: block;">
                        <div class="nk-stepper-content">
                            <div class="nk-stepper-progress stepper-progress mb-4">
                                <div class="stepper-progress-count mb-2">3 از 5</div>
                                <div class="progress progress-md">
                                    <div class="progress-bar stepper-progress-bar" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="nk-stepper-steps stepper-steps">
                                <div class="nk-stepper-step done">
                                    <h5 class="title mb-3">اطلاعات شخصی</h5>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sv1-first-name">نام</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control valid" id="sv1-first-name" name="sv1-first-name" placeholder="نام" required="" aria-describedby="sv1-first-name-error" aria-invalid="false">
                                                    <span id="sv1-first-name-error" class="invalid" style="display: none;"></span></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sv1-last-name">نام خانوادگی</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control valid" id="sv1-last-name" name="sv1-last-name" placeholder="نام خانوادگی" required="" aria-describedby="sv1-last-name-error" aria-invalid="false">
                                                    <span id="sv1-last-name-error" class="invalid" style="display: none;"></span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="sv1-email-address">نشانی ایمیل</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control valid" id="sv1-email-address" name="sv1-email-address" placeholder="نشانی ایمیل" required="" aria-describedby="sv1-email-address-error" aria-invalid="false">
                                                    <span id="sv1-email-address-error" class="invalid" style="display: none;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-stepper-step done">
                                    <h5 class="title mb-3">چگونه درباره شرکت ما شنیدید؟</h5>
                                    <ul class="row g-3">
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                <input type="radio" class="custom-control-input valid" name="sv1-affliate-source" id="sv1-affliate-source-search" value="sv1-affliate-source-search" required="">
                                                <label class="custom-control-label" for="sv1-affliate-source-search">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/search-engine.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">موتور جستجو</span>
                                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                <input type="radio" class="custom-control-input valid" name="sv1-affliate-source" id="sv1-affliate-source-print-advertise" value="sv1-affliate-source-print-advertise" required="">
                                                <label class="custom-control-label" for="sv1-affliate-source-print-advertise">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/print-advertize.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">آگهی چاپی</span>
                                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                <input type="radio" class="custom-control-input valid" name="sv1-affliate-source" id="sv1-affliate-source-friends" value="sv1-affliate-source-friends" required="">
                                                <label class="custom-control-label" for="sv1-affliate-source-friends">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/friends.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">یکی از دوستانم</span>
                                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                <input type="radio" class="custom-control-input valid" name="sv1-affliate-source" id="sv1-affliate-source-newspaper" value="sv1-affliate-source-newspaper" required="">
                                                <label class="custom-control-label" for="sv1-affliate-source-newspaper">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/newspaper.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">روزنامه</span>
                                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nk-stepper-step done active">
                                    <h5 class="title mb-4">آیا فکر می کنید شرکت ما را به یک دوست یا والدین پیشنهاد دهید؟</h5>
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <ul class="custom-control-group flex-column align-start">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input valid" name="sv1-reffer-probability" id="sv1-reffer-probability-no" required="">
                                                                <label class="custom-control-label" for="sv1-reffer-probability-no">خیر</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio checked">
                                                                <input type="radio" class="custom-control-input valid" name="sv1-reffer-probability" id="sv1-reffer-probability-maybe" required="">
                                                                <label class="custom-control-label" for="sv1-reffer-probability-maybe">شاید</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input valid" name="sv1-reffer-probability" id="sv1-reffer-probability-probably" required="">
                                                                <label class="custom-control-label" for="sv1-reffer-probability-probably">احتمالا</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input valid" name="sv1-reffer-probability" id="sv1-reffer-probability-yes" required="">
                                                                <label class="custom-control-label" for="sv1-reffer-probability-yes">100% مطمئن</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="sv1-why-not">در مورد خیر، لطفا توضیح دهید؟</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="sv1-why-not" name="sv1-why-not" placeholder="توضیحات پروژه را بنویسید"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-stepper-step done">
                                    <h5 class="title mb-3">لطفا رضایت کلی خود را از خدمات ارائه شده ارزیابی کنید.</h5>
                                    <ul class="row g-3">
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                <input type="radio" class="custom-control-input valid" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-completely" value="sv1-satisfaction-rate-completely" required="" aria-describedby="sv1-satisfaction-rate-error">
                                                <label class="custom-control-label" for="sv1-satisfaction-rate-completely">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/completely-satisfied.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">کاملا راضی</span>
                                                                    </span>
                                                </label>
                                                <span id="sv1-satisfaction-rate-error" class="invalid" style="display: none;"></span></div>
                                        </li>
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                <input type="radio" class="custom-control-input valid" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-normal" value="sv1-satisfaction-rate-normal" required="">
                                                <label class="custom-control-label" for="sv1-satisfaction-rate-normal">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/satisfied.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">راضی</span>
                                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                <input type="radio" class="custom-control-input valid" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-quite" value="sv1-satisfaction-rate-quite" required="" aria-invalid="false">
                                                <label class="custom-control-label" for="sv1-satisfaction-rate-quite">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/quite-satisfied.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">تقریبا راضی</span>
                                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="col-6">
                                            <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                <input type="radio" class="custom-control-input valid" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-not" value="sv1-satisfaction-rate-not" required="">
                                                <label class="custom-control-label" for="sv1-satisfaction-rate-not">
                                                                    <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                        <span class="icon-wrap xl">
                                                                            <img class="img" src="./images/icons/not-satisfied.svg" alt="">
                                                                        </span>
                                                                        <span class="lead-text mt-3">ناراضی</span>
                                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nk-stepper-step">
                                    <div class="pt-4 pb-2">
                                        <em class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>
                                        <h5 class="title mb-2">نظرسنجی تکمیل شد</h5>
                                        <p>از شما خیلی ممنونیم بابت زمانی که برای ما گذاشتید</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                <li class="step-prev" style="display: block;"><button class="btn btn-dim btn-primary">بازگشت</button></li>
                                <li class="step-next" style="display: block;"><button class="btn btn-primary">ادامه</button></li>
                                <li class="step-submit" style="display: none;"><button class="btn btn-primary">ارسال</button></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <!-- .nk-split-content -->
        </div>
        <!-- .nk-split -->
    </div>
@endsection
