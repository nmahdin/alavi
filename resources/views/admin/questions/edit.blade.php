@extends('layouts.admin')

@section('title')
    ویرایش سوال
@endsection

@php
    $t = $q_data->true;
    function check($qn , $t) {
       if ($qn == $t) {
       return 'checked=""';
   }
    }

@endphp

@section('body')


    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">

                    <h3 class="nk-block-title page-title"><em class="icon ni ni-square-fill-c ico-title"></em>ویرایش
                        سوال</h3>


                    @if($errors->any())

                        <div class="alert alert-pro alert-danger alert-dismissible">
                            <div class="alert-text">
                                <h6 class="text-danger">خطا: <strong>سوال ایجاد نشد!</strong></h6>
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            <button class="close" data-bs-dismiss="alert"></button>
                        </div>

                    @endif
                </div>
                <div class="nk-block-head-content">
                    <a id="back" href="{{ route('question.all') }}" onclick="loading('back')"
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
                    @if($success == true)
                        <div class="alert alert-fill alert-danger alert-icon" style="padding-left: 20px;">
                            <em class="icon ni ni-check-circle" style="top: 7px !important;"></em>سوال ویرایش شد.
                        </div>
                    @endif
                </div>

                <form action="/admin/questions/edit/{{ $q_data->id }}" class="gy-3" method="post">
                    @csrf
                    @method('put')
                    <div class="row g-3 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="qnumber" class="form-label">شماره سوال:</label>
                                <span class="form-note">شماره سوالی را که مد نظر دارید وارد کنید.</span>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" VALUE="{{ $q_data->number }}"
                                           class="form-control form-control-lg" name="qnumber" id="qnumber">
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
                                    <input type="text" VALUE="{{ $q_data->text }}" class="form-control form-control-lg"
                                           name="qtext" id="qtext">
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
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" VALUE="{{ $q_data->g1 }}" class="form-control form-control-lg"
                                           name="g1" id="g1">
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
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" VALUE="{{ $q_data->g2 }}" class="form-control form-control-lg"
                                           name="g2" id="g2">
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
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" VALUE="{{ $q_data->g3 }}" class="form-control form-control-lg"
                                           name="g3" id="g3">
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
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" VALUE="{{ $q_data->g4 }}" class="form-control form-control-lg"
                                           name="g4" id="g4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-4 align-center flex-wrap">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">گزینه صحیح:</label>
                                <span class="form-note">این گزینه به عنوان جواب صحیح در نظر گرفته می شود.</span>
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
                                <input type="radio" {{ check(1,$t) }} class="custom-control-input" value="1" name="true_gozine"
                                       id="true_gozine1">
                                <label class="custom-control-label" for="true_gozine1">گزینه 1</label>
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
                                <input type="radio" {{ check(2,$t) }} class="custom-control-input" value="2" name="true_gozine"
                                       id="true_gozine2">
                                <label class="custom-control-label" for="true_gozine2">گزینه 2</label>
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
                                <input type="radio" {{ check(3,$t) }} class="custom-control-input" value="3" name="true_gozine"
                                       id="true_gozine3">
                                <label class="custom-control-label" for="true_gozine3">گزینه 3</label>
                            </div>
                        </div>
                        <div class="g">
                            <div class="custom-control custom-radio">
                                <input type="radio" {{ check(4,$t) }} class="custom-control-input" value="4" name="true_gozine"
                                       id="true_gozine4">
                                <label class="custom-control-label" for="true_gozine4">گزینه 4</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="form-group mt-2">
                                <button type="submit" class="btn-edit btn btn-lg btn-dim btn-primary">ویرایش</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- .nk-block -->
    </div>





    {{--    @foreach($errors->all() as $error)--}}
    {{--        <ul>--}}
    {{--            <li> {{ $error }}</li>--}}
    {{--        </ul>--}}
    {{--    @endforeach--}}

    {{--    <form action="/admin/questions/edit/{{ $q_data->q_number }}" method="post">--}}
    {{--        @csrf--}}
    {{--        @method('put')--}}
    {{--        <lable for="q_number">شماره سوال را وارد کنید</lable>--}}
    {{--        <input type="text" name="q_number" VALUE="{{ $q_data->q_number }}"><br>--}}
    {{--        <lable for="q_text">صورت سوال را وارد کنید</lable>--}}
    {{--        <input type="text" name="q_text" VALUE="{{ $q_data->q_text }}"><br>--}}
    {{--        <lable for="gozine1">متن گزینه اول را وارد کنید</lable>--}}
    {{--        <input type="text" name="gozine1" VALUE="{{ $q_data->gozine1 }}"><br>--}}
    {{--        <lable for="gozine2">متن گزینه دوم را وارد کنید</lable>--}}
    {{--        <input type="text" name="gozine2" VALUE="{{ $q_data->gozine2 }}"><br>--}}
    {{--        <lable for="gozine3">متن گزینه سوم را وارد کنید</lable>--}}
    {{--        <input type="text" name="gozine3" VALUE="{{ $q_data->gozine3 }}"><br>--}}
    {{--        <lable for="gozine4">متن گزینه چهارم  را وارد کنید</lable>--}}
    {{--        <input type="text" name="gozine4" VALUE="{{ $q_data->gozine4 }}"><br>--}}
    {{--        <lable for="true_gozine">شماره گزینه درست را وارد کنید</lable>--}}
    {{--        <input type="text" name="true_gozine" VALUE="{{ $q_data->true_gozine }}"><br>--}}
    {{--        <button>ثبت سوال</button>--}}
    {{--    </form>--}}

@endsection

