@extends('layouts.admin')

@section('title')
    تنظیمات برنامه
@endsection
<?php
use App\Models\AdminConfigs;
function config2($con)
{
//    return 'sdd';
    return AdminConfigs::where('name', "$con")->first()->config;
}
?>
@section('body')
    <div class="container-xl wide-xl" data-select2-id="19">
        <div class="nk-content-body" data-select2-id="18">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">تنظیمات برنامه</h3>
                        <div class="nk-block-des text-soft">
                            <p>تنظیمات مربوط به پلتفرم و قسمت های مختلف برنامه.</p>
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
                                            <a id="new" href="{{ route('admin.dashboard') }}" onclick="loading('new')"
                                               class="btn btn-icon btn-primary btnplus">داشبور
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
                    <form action="{{ route('config.all') }}" id="sform" class="gy-3" method="post">
                        @csrf
                        <div class="row g-3 align-center">
                               <span>
                                    <span class="nk-menu-icon text-primary"><em
                                            class="icon ni ni-bookmark-fill"></em></span>
                                    <span class="nk-menu-text"><h5 class="text-primary fw-normal">عمومی</h5></span>
                               </span>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="group_name" class="form-label">نام گروه:</label>
                                    <span class="form-note">این نام در همه جای برنامه نمایش داده می شود.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="group_name" type="text"
                                               class="form-control @error('group_name') error @enderror"
                                               placeholder="چشم انتظار" value="{{ config2('group_name') }}"
                                               name="group_name">
                                        @error('group_name')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="mosabeghe_name" class="form-label">نام مسابقه:</label>
                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="mosabeghe_name" type="text"
                                               class="form-control @error('mosabeghe_name') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('mosabeghe_name') }}"
                                               name="mosabeghe_name">
                                        @error('mosabeghe_name')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <span>
                                <span class="nk-menu-icon text-primary"><em class="icon ni ni-bookmark-fill"></em></span>
                                <span class="nk-menu-text"><h5 class="text-primary fw-normal">صفحه خوش آمد گویی مسابقه قبل از ورود</h5></span>
                            </span>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="welcome_text" class="form-label">متن خوش آمد گویی:</label>
{{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="welcome_text" type="text"
                                               class="form-control @error('welcome_text') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('welcome_text') }}"
                                               name="welcome_text">
                                        @error('welcome_text')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="welcome_text_off" class="form-label">متن موقع خاموش بودن برنامه:</label>
                                    {{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="welcome_text_off" type="text"
                                               class="form-control @error('welcome_text_off') error @enderror "
                                               placeholder="برنامه فعال نمی باشد!" value="{{ config2('welcome_text_off') }}"
                                               name="welcome_text_off">
                                        @error('welcome_text_off')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="welcome_btn" class="form-label">متن دکمه برای ورود به مسابقه:</label>
{{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="welcome_btn" type="text"
                                               class="form-control @error('welcome_btn') error @enderror "
                                               placeholder="ورود به برنامه" value="{{ config2('welcome_btn') }}"
                                               name="welcome_btn">
                                        @error('welcome_btn')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <br>

                            <span>
                                <span class="nk-menu-icon text-primary"><em class="icon ni ni-bookmark-fill"></em></span>
                                <span class="nk-menu-text"><h5 class="text-primary fw-normal">صفحه شروع مسابقه</h5></span>
                            </span>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="off_start_text" class="form-label">متن صفحه شروع در حالی که سوالات فعال
                                        نیستند:</label>
{{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="off_start_text" type="text"
                                               class="form-control @error('off_start_text') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('off_start_text') }}"
                                               name="off_start_text">
                                        @error('off_start_text')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="enable_start_title" class="form-label">عنوان باکس صفحه شروع
                                        مسابقه:</label>
{{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="enable_start_title" type="text"
                                               class="form-control @error('enable_start_title') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('enable_start_title') }}"
                                               name="enable_start_title">
                                        @error('enable_start_title')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="enable_start_text" class="form-label">متن صفحه شروع:</label>
{{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="enable_start_text" type="text"
                                               class="form-control @error('enable_start_text') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('enable_start_text') }}"
                                               name="enable_start_text">
                                        @error('enable_start_text')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="start_btn" class="form-label">متن دکمه شروع:</label>
{{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="start_btn" type="text"
                                               class="form-control @error('start_btn') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('start_btn') }}"
                                               name="start_btn">
                                        @error('start_btn')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <span>
                                <span class="nk-menu-icon text-primary"><em class="icon ni ni-bookmark-fill"></em></span>
                                <span class="nk-menu-text"><h5 class="text-primary fw-normal">تنظمیات مروبوط به صندلی ها</h5></span>
                            </span>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="start_btn" class="form-label">تعداد صندلی ها:</label>
                                    {{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="chair_count" type="text"
                                               class="form-control @error('chair_count') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('chair_count') }}"
                                               name="chair_count">
                                        @error('chair_count')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="start_btn" class="form-label">تعداد ستون صندلی ها:</label>
                                    {{--                                    <span class="form-note">به عنوان نام مسابقه نمایش داده می شود.</span>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap number-spinner-wrap">
                                        <input id="chair_column" type="text"
                                               class="form-control @error('chair_column') error @enderror "
                                               placeholder="نام مسابقه" value="{{ config2('chair_column') }}"
                                               name="chair_column">
                                        @error('chair_column')
                                        <span id="fv-message-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <span>
                                <span class="nk-menu-icon text-primary"><em class="icon ni ni-bookmark-fill"></em></span>
                                <span class="nk-menu-text"><h5 class="text-primary fw-normal">دیگر</h5></span>
                            </span>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label">فعال بودن مسابقه</label>
                                    <span
                                        class="form-note">در صورت خاموش بودن امکان ورود به مسابقه غیر فعال خواهد بود.</span>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <div class="custom-control custom-switch custom-control-lg">
{{--                                        <input @if(config2('on_off')) checked @endif--}}
{{--                                        onclick="event.preventDefault(); document.getElementById('sform').submit();"--}}
{{--                                               value="@if(config2('on_off')) 0 @else 1 @endif" type="checkbox"--}}
{{--                                               class="custom-control-input"--}}
{{--                                               id="on_off" name="on_off">--}}
                                        <input @if(config2('on_off')) checked @endif
                                            type="checkbox"
                                               class="custom-control-input"
                                               id="on_off" name="on_off">
                                        <label class="custom-control-label" for="on_off">غیر فعال / فعال</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label">امکان افزودن ادمین</label>
                                    <span
                                        class="form-note">در صورت خاموش بودن امکان ثبت نام ادمین غیر فعال خواهد بود.</span>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <div class="custom-control custom-switch custom-control-lg">
                                        <input @if(config2('admin_register')) checked @endif
                                                type="checkbox"
                                               class="custom-control-input"
                                               id="admin_register" name="admin_register">
                                        <label class="custom-control-label" for="admin_register">غیر فعال / فعال</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label">فعال بودن برنامه</label>
                                    <span
                                        class="form-note">در صورت خاموش بودن امکان ورود به برنامه وجود نخواهد داشت.</span>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <div class="custom-control custom-switch custom-control-lg">
                                        <input @if(config2('app')) checked @endif
                                        type="checkbox"
                                               class="custom-control-input"
                                               id="app" name="app">
                                        <label class="custom-control-label" for="app">غیر فعال / فعال</label>
                                    </div>
                                </div>
                            </div>
                        </div>
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


@endsection


{{--                                        <form class="tb-odr-btns d-none d-md-inline"--}}
{{--                                              action="/admin/questions/{{$q->id}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            @method('delete')--}}
{{--                                            <button class="text-danger delete-btn">حذف سوال</button>--}}
{{--                                        </form>--}}

