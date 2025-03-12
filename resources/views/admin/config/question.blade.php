@extends('layouts.admin')

@section('title')
    مدریت سوالات
@endsection
<?php
use \App\Models\Questions;
$n = Questions::count()
?>
@section('body')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl" data-select2-id="19">
            <div class="nk-content-body" data-select2-id="18">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">تنظیمات سوالات</h3>
                            <div class="nk-block-des text-soft">
                                <p>مدریت روند پاسخ دهی به سوالات. در مجموع {{$n}} سوال وجود دارد.</p>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                        class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <div class="drodown">
                                                <a id="new" href="{{ route('admin.dashboard') }}"
                                                   onclick="loading('new')" class="btn btn-icon btn-primary btnplus">
                                                    داشبورد
                                                    <em class="icon ni ni-back-ios"></em></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .toggle-wrap -->
                        </div>
                        <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                </div>
                <!-- .nk-block-head -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">تنظیمات</h5>
                        </div>
                        @if($app)
                            @if($on_off)
                                <p class="text-danger">هنگام فعال بودن مسابقه امکان تغییر وجود ندارد.</p>
                                @if($dor != 0)
                                    <h5 class="bg-info-dim text-info" style="width: 15%; padding: 7px; border-radius: 7px;">تعداد دور ها: {{ ceil($n / $dor) }}</h5>
                                @endif
                                <br>
                                <h6>تعداد سوالات در هر دور: {{ $dor }}</h6>

                            @else
                                <form action="{{ route('config_question') }}" class="gy-3" method="post">
                                    @csrf
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="dor" class="form-label">تعداد سوالات در هر دور(آنلاین):</label>
                                                <div class="form-control-wrap number-spinner-wrap">
                                                    <a class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                                       data-number="minus"><em class="icon ni ni-minus"></em></a>
                                                    <input id="dor" type="number" class="form-control number-spinner"
                                                           placeholder="شماره" value="{{ $dor ?? 3 }}" min="1" max="30"
                                                           name="dor">
                                                    <a type=""
                                                       class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                                       data-number="plus"><em class="icon ni ni-plus"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                @if($dor != 0)
                                                    <p>تعداد دور ها: {{ ceil($n / $dor) }}</p>
                                                @endif
                                                <p></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn-edit btn btn-lg btn-dim btn-primary">
                                                    ویرایش
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif

                        @else
                            <p class="text-danger">برنامه فعال نیست.</p>
                        @endif


                    </div>
                </div>
                <!-- .nk-block -->
            </div>
        </div>
    </div>


@endsection


{{--                                        <form class="tb-odr-btns d-none d-md-inline"--}}
{{--                                              action="/admin/questions/{{$q->id}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            @method('delete')--}}
{{--                                            <button class="text-danger delete-btn">حذف سوال</button>--}}
{{--                                        </form>--}}

