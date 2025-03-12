@extends('layouts.admin')

@section('title')
    نمایش همه سوالات حضوری
@endsection

<?php
use \App\Models\HQuestions;
$n = HQuestions::count()

?>





@section('body')

    <div class="container-xl wide-xl" data-select2-id="19">
        <div class="nk-content-body" data-select2-id="18">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">لیست سوالات حضوری</h3>

                        {{--                            @if(session('status'))--}}

                        {{--                                <span class="alert alert-fill alert-success alert-icon" style="padding-left: 20px;">--}}
                        {{--                                    <em class="icon ni ni-check-circle" style="top: 6px !important;"></em>سوال ویرایش شد.--}}
                        {{--                                </span>--}}

                        {{--                            @endif--}}
                        <div class="nk-block-des text-soft">
                            <p>در مجموع {{ $n }} سوال وجود دارد</p>
                            @if(session('status'))
                                <div class="alert alert-fill alert-success alert-icon">
                                    <em class="icon ni ni-check-fill-c"></em> سوال با موفقیت حذف شد!
                                </div>
                            @endif
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
                                            <a id="new" href="{{ route('h.question.creat') }}"
                                               onclick="loading('new')" class="btn btn-icon btn-primary btnplus">افزودن
                                                سوال<em class="icon ni ni-plus"></em></a>
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
                <div class="card card-stretch" data-select2-id="16">
                    <div class="card-inner-group" data-select2-id="15">
                        <!-- .card-inner -->

                        <div class="card-inner p-0">
                            <div class="nk-tb-list nk-tb-ulist">

                                @if($n == 0)

                                    <div class="alert alert-fill alert-warning alert-icon">
                                        <em class="icon ni ni-alert-circle"></em>

                                        <strong>سوالی وجود ندارد</strong>

                                        <a href="{{ route('h.question.creat') }}" class="alert-link">ایجاد سوال</a>

                                    </div>

                                @endif

                                @if($n !== 0)

                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span class="sub-text">شماره سوال</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text q-head">متن سوال</span>
                                        </div>
                                        <div class="nk-tb-col text-end"><span class="sub-text">اقدامات</span></div>
                                    </div>
                                    @foreach($questions as $q)

                                    <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">

                                            <div class="nk-tb-col col-n">
                                                <span class="sub-text">{{ $q->number }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="sub-text">{{ $q->text }}</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="/admin/h_questions/detail/{{ $q->id }}"
                                                           class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" aria-label="مشاهده جزئیات"
                                                           data-bs-original-title="مشاهده جزئیات">
                                                            <em class="icon ni ni-eye-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="/admin/h_questions/edit/{{$q->id}}"
                                                           class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" aria-label="ویرایش"
                                                           data-bs-original-title="ویرایش">
                                                            <em class="icon ni ni-edit-alt-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="d/{{$q->id}}" onclick="event.preventDefault();
                                                     document.getElementById('delete-q').submit();"
                                                           class="btn btn-trigger btn-icon eg-swal-av3"
                                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                                           aria-label="حذف کردن" data-bs-original-title="حذف کردن">
                                                            <em class="icon ni ni-trash-fill"></em>
                                                        </a>
                                                    </li>
                                                    <form id="delete-q" action="/admin/questions/d/{{$q->id}}"
                                                          method="POST" class="d-none">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                    @endforeach

                                    @if($questions->hasPages())
                                        <div class="row align-items-center">
                                            <div class="col-7 col-sm-12 col-md-9">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                     id="DataTables_Table_2_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous"
                                                            id="DataTables_Table_2_previous"><a
                                                                href="{{ $questions->previousPageUrl() }}"
                                                                aria-controls="DataTables_Table_2"
                                                                role="link"
                                                                data-dt-idx="previous"
                                                                tabindex="0"
                                                                class="page-link">قبلی</a>
                                                        </li>

                                                        @for ($i = 1; $i <= ceil($n / 20); $i++)
                                                            <li class="paginate_button page-item @if($questions->currentPage() == $i) active @endif">
                                                                <a href="{{ $questions->url($i) }}"
                                                                   aria-controls="DataTables_Table_2"
                                                                   role="link"
                                                                   data-dt-idx="$i"
                                                                   tabindex="0"
                                                                   class="page-link">{{$i}}</a>
                                                            </li>

                                                        @endfor


                                                        <li class="paginate_button page-item next"
                                                            id="DataTables_Table_2_next"><a
                                                                href="{{ $questions->nextPageUrl() }}"
                                                                aria-controls="DataTables_Table_2"
                                                                role="link" data-dt-idx="next"
                                                                tabindex="0" class="page-link">بعدی</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-5 col-sm-12 col-md-3 text-start text-md-end">
                                                <div class="dataTables_info" id="DataTables_Table_2_info" role="status"
                                                     aria-live="polite">

                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                @endif

                            </div>
                            <!-- .nk-tb-list -->
                        </div>
                    </div>
                    <!-- .card-inner-group -->

                </div>
                <!-- .card -->
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
