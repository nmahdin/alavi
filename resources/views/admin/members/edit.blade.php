@extends('layouts.admin')

@section('title')
ویرایش شرکت کننده
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
                            <h3 class="nk-block-title page-title">ویرایش شرکت کننده</h3>
                            <div class="nk-block-des text-soft">
                                <p>تنظیمات مربوط به شرکت کننده.</p>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <div class="drodown">
                                                <a id="new" href="{{ route('member.all') }}" onclick="loading('new')" class="btn btn-icon btn-info btnplus">بازگشت<em class="icon ni ni-back-ios"></em></a>
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

                        <form action="{{ route('member.edit') }}"  class="gy-3" method="post">
                            @csrf
                            <div class="row g-3 align-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">نام</label>
                                        <div class="form-control-wrap number-spinner-wrap">
                                            <input id="name" type="text" class="form-control" placeholder="نام" value="{{ $member->name }}"  name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="number" class="form-label">شماره</label>
                                        <div class="form-control-wrap number-spinner-wrap">
                                            <input id="number" type="text" class="form-control " placeholder="نام کاربری" value="{{ $member->number }}" name="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="chair_number" class="form-label">شماره صندلی</label>
                                        <div class="form-control-wrap number-spinner-wrap">
                                            <input id="chair_number" type="text" class="form-control " placeholder="نام کاربری" value="{{ $member->chair_number }}" name="chair_number">
                                        </div>
                                    </div>
                                </div>
                                <input style="display: none" id="id" type="text" class="form-control" placeholder="نام" value="{{ $member->id }}"  name="id">

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
        </div>
    </div>


@endsection


{{--                                        <form class="tb-odr-btns d-none d-md-inline"--}}
{{--                                              action="/admin/questions/{{$q->id}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            @method('delete')--}}
{{--                                            <button class="text-danger delete-btn">حذف سوال</button>--}}
{{--                                        </form>--}}

