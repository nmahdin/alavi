@extends('layouts.member.show')

@section('title')
    لیست صندلی ها
@endsection

<?php

use \App\Models\User;

$n = User::where('admin', 0)->count()


?>

{{ $i = 1 }}
{{ $count = \App\Models\AdminConfigs::where('name', 'chair_count')->first()->config }}
{{ $column = \App\Models\AdminConfigs::where('name', 'chair_column')->first()->config }}




@section('body')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl" data-select2-id="19">
            <div class="nk-content-body" data-select2-id="18">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">لیست صندلی های سالن</h3>

                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                            class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">

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
                            @if($n == 0)
                                <div class="alert alert-fill alert-warning alert-icon">
                                    <em class="icon ni ni-alert-circle"></em>
                                    <strong>شرکت کننده ای وجود ندارد</strong>
                                </div>
                            @endif

                            @if($n !== 0)

                                <div class="card card-preview">
                                    <div class="card-inner">

                                            @for($i = 0; $i <= $count; $i++)
                                            <div class="d-flex justify-content-center mb-3">
                                                @while($i%$column != 0)

                                                    <div class="p-2
                                                    @php
                                                         if ($true = \App\Models\User::where('chair_number', $i)->first() == null) {
                                                             $true = null;
                                                         } else {
                                                             $true = \App\Models\User::where('chair_number', $i)->first()->n_true_d;
                                                         }

                                                         if ($false = \App\Models\User::where('chair_number', $i)->first() == null) {
                                                             $false = null;
                                                         } else {
                                                             $false = \App\Models\User::where('chair_number', $i)->first()->n_false_d;
                                                         }

                                                    @endphp
                                                    @if($true == null & $false == null)
                                                        bg-lighter
                                                        @endif
                                                    @if($true == 0 & $false == 0)
                                                    bg-info
                                                    @endif
                                                    @if($true < $false )
                                                    bg-danger
                                                    @else
                                                    bg-success
                                                    @endif
                                                    "
                                                         style="margin-right: 4px; border-radius: 7px; padding: 30px !important; color: white; font-family: sans-serif">
                                                        @if($i < 10)
                                                            {{ '00'.$i }}
                                                            @else
                                                        @else
                                                            {{ $i }}
                                                        @endif
                                                    </div>

                                                    <span style="display: none">{{ $i++ }}</span>

                                                @endwhile

                                            </div>
                                            @endfor



                                    </div>
                                </div>


{{--                                <div class="card-inner p-0" style="margin-right: 20px">--}}


                                    <!-- .nk-tb-list -->
                                </div>
                            @endif
                        </div>
                        <!-- .card-inner-group -->
                    </div>
                    <!-- .card -->
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

