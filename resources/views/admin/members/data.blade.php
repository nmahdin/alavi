@extends('layouts.admin')

@section('title')
    آمار کلی
@endsection


@section('body')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl" data-select2-id="19">
            <div class="nk-content-body" data-select2-id="18">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">آمار کلی</h3>

                            {{--                            @if(session('status'))--}}

                            {{--                                <span class="alert alert-fill alert-success alert-icon" style="padding-left: 20px;">--}}
                            {{--                                    <em class="icon ni ni-check-circle" style="top: 6px !important;"></em>سوال ویرایش شد.--}}
                            {{--                                </span>--}}

                            {{--                            @endif--}}
                            {{--                            @if($count !== 0)--}}
                            {{--                                <div class="nk-block-des text-soft">--}}
                            {{--                                    <p>در مجموع {{ $count }} شرکت کننده وجود دارد</p>--}}
                            {{--                                </div>--}}
                            {{--                            @endif--}}

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
                                                <a id="new" href="{{ route('config.all') }}"
                                                   onclick="loading('new')" class="btn btn-icon btn-primary btnplus">
                                                    تنظیمات
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
                <div class="nk-block" data-select2-id="17">
                    <div class="row g-gs">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-primary">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">{{ $count }}</span>
                                                        <span class="align-self-end fs-14px pb-1">
                                                             شرکت کننده
                                                        </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-info">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">{{ $qcount }}</span>
                                                        <span class="align-self-end fs-14px pb-1">
                                                            سوال آنلاین
                                                        </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-cmwg -->
                            </div>
                            <!-- .card -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-warning">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">{{ $qdor }}</span>
                                                    <span class="align-self-end fs-14px pb-1">سوال در هر دور </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-cmwg -->
                            </div>
                            <!-- .card -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-danger">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">{{ $hqcount }}</span>
                                                    <span class="align-self-end fs-14px pb-1">سوال حضوری</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-cmwg -->
                            </div>
                            <!-- .card -->
                        </div>
                        <div class="col-xxl-12 col-md-6">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">شرکت کنندگان برتر</h6>
                                        </div>
                                    </div>
                                </div>
                                @if($count == 0)
                                    <div class="nk-tb-list nk-tb-ulist p-3">
                                        <div class="alert alert-fill alert-warning alert-icon">
                                            <em class="icon ni ni-alert-circle"></em>
                                            <strong>شرکت کننده ای وجود ندارد!</strong>
                                        </div>
                                    </div>
                                @else
                                    <table class="table table-tranx">
                                        <thead class="bg-light bg-opacity-75">
                                        <tr class="tb-tnx-head">
                                            <th class="tb-tnx-id"><span class="">نام</span></th>
                                            <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>شماره موبایل</span>
                                                            </span>
                                                <span class="tb-tnx-date d-md-inline-block d-none">
                                                <span class="d-none d-md-block">
                                                    <span>تعداد پاسخ های درست</span>
                                                    <span>تعداد پاسخ های نادرست</span>

                                                </span>
                                            </span>
                                            </th>
                                            <th class="tb-tnx-info">
                                            <span class="tb-tnx-date d-md-inline-block d-none" >
                                                    <span>امتیاز</span>
                                            </span>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $u)
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id">
                                                    <span class="title">{{ $u->name }}</span>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <span class="title">{{ $u->number }}</span>
                                                    </div>
                                                    <div class="tb-tnx-date">
                                                        <span class="date">{{ $u->n_true }}</span>
                                                        <span class="date">{{ $u->n_false }}</span>
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    <span class="bg-dark-dim" style="text-align: center; width: 30px; border-radius: 7px; padding: 4px">{{ $u->score }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                        <div class="col-xxl-12 col-md-6">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">سوالات سخت تر</h6>
                                        </div>
                                    </div>
                                </div>
                                @if($qcount == 0)
                                    <div class="nk-tb-list nk-tb-ulist p-3">
                                        <div class="alert alert-fill alert-warning alert-icon">
                                            <em class="icon ni ni-alert-circle"></em>
                                            <strong>سوالی وجود ندارد!</strong>
                                        </div>
                                    </div>
                                @else
                                    <table class="table table-tranx">
                                        <thead class="bg-light bg-opacity-75">
                                        <tr class="tb-tnx-head">
                                            <th class="tb-tnx-id"><span class="">#</span></th>
                                            <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>صورت سوال</span>
                                                            </span>
                                                <span class="tb-tnx-date d-md-inline-block d-none">
                                                <span class="d-none d-md-block">
                                                    <span>تعداد پاسخ های درست</span>
                                                    <span>تعداد پاسخ های نادرست</span>
                                                </span>
                                            </span>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($questions as $q)
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id">
                                                    <a class="text-primary" href="/questions/detail/{{ $q->id }}"><span>{{ $q->number }}</span></a>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <span class="title">{{ $q->text }}</span>
                                                    </div>
                                                    <div class="tb-tnx-date">
                                                        <span class="date">{{ $q->n_true }}</span>
                                                        <span class="date">{{ $q->n_false }}</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                            <!-- .card -->
                        </div>

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

