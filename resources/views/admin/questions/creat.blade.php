@extends('layouts.admin')

@section('title')
    ایجاد سوال جدید
@endsection

@php
    $t = old('true_gozine');
    function check($qn , $t) {
        if ($qn == $t) {
        return 'checked=""';
    }
    }

function check2() {
               return 'checked=""';
    }

@endphp

@section('body')


    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title"><em class="icon ni ni-square-fill-c ico-title"></em>ایجاد سوال
                        جدید</h3>
                    {{--                    @if($errors->any())--}}

                    {{--                            <div class="alert alert-pro alert-danger alert-dismissible">--}}
                    {{--                                <div class="alert-text">--}}
                    {{--                                    <h6 class="text-danger">خطا:  <strong>سوال ایجاد نشد!</strong></h6>--}}
                    {{--                                    @foreach($errors->all() as $error)--}}
                    {{--                                    <p>{{ $error }}</p>--}}
                    {{--                                    @endforeach--}}
                    {{--                                </div>--}}
                    {{--                                <button class="close" data-bs-dismiss="alert"></button>--}}
                    {{--                            </div>--}}

                    {{--                    @endif--}}


                    {{--                             @foreach($errors->all() as $error)--}}
                    {{--                                <div class="alert">--}}
                    {{--                                    <div class="alert alert-pro alert-danger alert-dismissible">--}}
                    {{--                                        <div class="alert-text">--}}
                    {{--                                            <h6>خطا:  <strong>سوال ایجاد نشد!</strong></h6>--}}
                    {{--                                            <p>لطفاً تمام فیلد ها را به طور کامل پر کنید.</p>--}}
                    {{--                                            <ul>--}}
                    {{--                                                <li> {{ $error }}</li>--}}
                    {{--                                            </ul>--}}
                    {{--                                        </div>--}}
                    {{--                                        <button class="close" data-bs-dismiss="alert"></button>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                              @endforeach--}}


                </div>
                <div class="nk-block-head-content">
                    <a id="back" onclick="loading('back')" href="{{ route('question.all') }}"
                       class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                            class="icon ni ni-arrow-left"></em><span>بازگشت</span></a>
                    <a href="html/invoice-list.html"
                       class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                            class="icon ni ni-arrow-left"></em></a>
                </div>
            </div>
        </div>
        <!-- .nk-block-head -->
        <div class="card">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">مشخصات سوال</h5>
                    @if($errors->any())
                        <div class="alert alert-fill alert-danger alert-icon" style="padding-left: 20px;">
                            <em class="icon ni ni-cross-fill-c" style="top: 6px !important;"></em>سوال ایجاد نشد.
                        </div>
                    @endif
                    @if($success == true)
                        <div class="alert alert-fill alert-success alert-icon" style="padding-left: 20px;">
                            <em class="icon ni ni-check-fill-c" style="top: 6px !important;"></em>سوال ایجاد شد.
                        </div>
                    @endif
                </div>

                <form action="{{ route('question.creat') }}" class="gy-3" method="post">
                    @csrf

                    <div class="row g-3 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="number" class="form-label">شماره سوال:</label>
                                <span class="form-note">شماره سوالی را که مد نظر دارید وارد کنید.</span>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="form-control-wrap">

                                    <input type="text"  class="form-control form-control-lg @error('number') error @enderror"
                                           value="{{ old('number') }}" name="number" id="number">
                                    @error('number')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="qtext" class="form-label">صورت سوال:</label>
                                <span class="form-note">.صورت سوال جدید را وارد کنید</span>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg @error('qtext') error @enderror"
                                           value="{{ old('qtext') }}" name="qtext" id="qtext">
                                    @error('qtext')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="g1" class="form-label">گزینه اول:</label>
                                <span class="form-note">.متن گزینه اول را وارد کنید</span>
                            </div>
                        </div>
                        <div class="col-lg-1" style="width: 40;">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" {{ check(1,$t) }} class="custom-control-input" value="1" name="true_gozine" id="true_gozine1">
                                    <label class="custom-control-label" for="true_gozine1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg @error('g1') error @enderror"
                                           value="{{ old('g1') }}" name="g1" id="g1">
                                    @error('g1')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="g2" class="form-label">گزینه دوم:</label>
                                <span class="form-note">.متن گزینه دوم را وارد کنید</span>
                            </div>
                        </div>
                        <div class="col-lg-1" style="width: 40;">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" {{ check(2,$t) }} class="custom-control-input" value="2" name="true_gozine" id="true_gozine2">
                                    <label class="custom-control-label" for="true_gozine2"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg @error('g2') error @enderror"
                                           value="{{ old('g2') }}" name="g2" id="g2">
                                    @error('g2')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="g3" class="form-label">گزینه سوم:</label>
                                <span class="form-note">.متن گزینه سوم را وارد کنید</span>
                            </div>
                        </div>
                        <div class="col-lg-1" style="width: 40;">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" {{ check(3,$t) }} class="custom-control-input" value="3" name="true_gozine" id="true_gozine3">
                                    <label class="custom-control-label" for="true_gozine3"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg @error('g3') error @enderror"
                                           value="{{ old('g3') }}" name="g3" id="g3">
                                    @error('g3')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="g4" class="form-label">گزینه چهارم:</label>
                                <span class="form-note">.متن گزینه چهارم را وارد کنید</span>
                            </div>
                        </div>
                        <div class="col-lg-1" style="width: 40;">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" {{ check(4,$t) }} class="custom-control-input" value="4" name="true_gozine" id="true_gozine4">
                                    <label class="custom-control-label" for="true_gozine4"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg @error('g4') error @enderror"
                                           value="{{ old('g4') }}" name="g4" id="g4">
                                    @error('g4')
                                    <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-4 align-center flex-wrap">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">گزینه صحیح را انتخاب کنید</label>
                                <span class="form-note">این گزینه به عنوان جواب صحیح در نظر گرفته می شود.</span>
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
{{--                                <input type="radio" {{ check(1,$t) }} class="custom-control-input" value="1"--}}
{{--                                       name="true_gozine" id="true_gozine1">--}}
                                <label class="" for="true_gozine1">گزینه 1</label>
                                @error('true_gozine')
                                <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
{{--                                <input type="radio" {{ check(2,$t) }} class="custom-control-input" value="2"--}}
{{--                                       name="true_gozine" id="true_gozine2">--}}
                                <label class="" for="true_gozine2">گزینه 2</label>
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
{{--                                <input type="radio" {{ check(3,$t) }} class="custom-control-input" value="3"--}}
{{--                                       name="true_gozine" id="true_gozine3">--}}
                                <label class="" for="true_gozine3">گزینه 3</label>
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
{{--                                <input type="radio" {{ check(4,$t) }} class="custom-control-input" value="4"--}}
{{--                                       name="true_gozine" id="true_gozine4">--}}
                                <label class="" for="true_gozine4">گزینه 4</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="form-group mt-2">
                                <button type="submit" class="btn-edit btn btn-lg btn-dim btn-primary">ثبت سوال جدید
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- .nk-block -->
    </div>







@endsection


