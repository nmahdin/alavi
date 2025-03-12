@extends('layouts.admin')

@section('title')
    تنظیمات ادمین
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
                            <h3 class="nk-block-title page-title">تنظیمات ادمین</h3>
                            <div class="nk-block-des text-soft">
                                <p>تنظیمات مربوط به ادمین.</p>
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
                                                <a id="back" onclick="loading('back')" href="{{ route('config.admins') }}"
                                                   class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                                        class="icon ni ni-arrow-left"></em><span>بازگشت</span></a>
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

                        <form action="{{ route('config.user') }}" class="gy-3" method="post">
                            @csrf
                            <div class="row g-3 align-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">نام</label>
                                        <div class="form-control-wrap number-spinner-wrap">
                                            <input id="name" type="text"
                                                   class="form-control @error('name') error @enderror" placeholder="نام"
                                                   value="{{ $user->name }}" name="name">
                                            @error('name')
                                            <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="number" class="form-label">نام کاربری</label>
                                        <div class="form-control-wrap number-spinner-wrap">
                                            <input id="number" type="text"
                                                   class="form-control @error('number') error @enderror "
                                                   placeholder="نام کاربری" value="{{ $user->number }}" name="number">
                                            @error('number')
                                            <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    @if(\Illuminate\Support\Facades\Auth::user()->full_admin & $user->admin)
                                    <div class="form-group">
                                        <label for="level" class="form-label">سطح دسترسی</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2 @error('level') error @enderror " id="level" name="level">
                                                @if($user->full_admin)
                                                    <option value="full_admin">مدیر کامل</option>
                                                    <option value="admin">مدیر ساده</option>
                                                @else
                                                    <option value="admin">مدیر ساده</option>
                                                    <option value="full_admin">مدیر کامل</option>
                                                @endif
                                            </select>
                                        </div>
                                        @error('level')
                                            <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                @endif
                                </div>
                                <input style="display: none" id="id" type="text" value="{{ $user->id }}" name="id">
                            <div class="row g-3">
                                <div class="col-lg-7 offset-lg-5">
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn-edit btn btn-lg btn-dim btn-primary">ویرایش
                                        </button>
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

