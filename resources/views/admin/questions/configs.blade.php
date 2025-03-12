@extends('layouts.admin')

@section('title')
    تنظیمات فعال سازی دور ها
@endsection
<?php
use \App\Models\Questions;
$n = Questions::count()
?>


@section('body')


    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">
                                مدریت
                                فعال سازی دور ها</h3>
                            <div class="nk-block-des text-soft">
                                @if($dor != 0 && $n != 0)
                                    <p>تعداد دور ها: {{ ceil($n / $dor) }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a id="back" href="{{ route('admin.dashboard') }}" onclick="loading('back')"
                               class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><span>داشبورد</span><em class="icon ni ni-back-ios"></em></a>
                        </div>
                    </div>
                </div>
                <!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="invoice">
                        <div class="card invoice-wrap">
                            @if($app)
                                @if($n > 1)
                                    <h4>فعال سازی یا غیر فعال سازی دور ها:</h4>
                                    <br>
                                    <form id="edit-q1" action="{{ route('question.config.p') }}" method="post" class="">
                                        @csrf
                                        @for ($i = 1; $i <= ceil($n / $dor); $i++)
                                            <div class="g">
                                                <div class="custom-control custom-switch custom-control-lg checked">
                                                    <input {{ ($current_dor == $i) ? 'checked' : '' }}
                                                           name=current_dor
                                                           onclick="event.preventDefault(); document.getElementById('edit-q1').submit();"
                                                           value="{{ ($current_dor == $i) ? '0' : "$i" }}" type="checkbox" class="custom-control-input"
                                                           id="dor{{ $i }}">
                                                    <label class="custom-control-label" for="dor{{ $i }}">دور {{ $i }}</label>
                                                </div>
                                            </div>
                                            <br>
                                        @endfor
                                    </form>
                                @else
                                    <p class="text-danger">ابتدا سوال اضافه کنید.</p>
                                @endif

                            @else
                                <p class="text-danger">برنامه فعال نمی باشد</p>
                            @endif



                        </div>

                        <!-- .invoice-wrap -->
                    </div>
                    <!-- .invoice -->
                </div>
                <!-- .nk-block -->
            </div>
        </div>
    </div>

@endsection




