@extends('layouts.admin')

@section('title')
    جزئیات سوال
@endsection

@section('body')


            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title"><em class="icon ni ni-square-fill-c ico-title"></em>سوال
                                شماره <strong class="text-primary small">{{ $q_data->number }}</strong></h3>
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
                <div class="nk-block">
                    <div class="invoice">
                        <div class="card invoice-wrap">


                            <div class="card-head">
                                <h5 class="card-title">مشخصات سوال:</h5>
                                @if(session('success'))

                                    <span class="alert alert-fill alert-success alert-icon" style="padding-left: 20px;">
                                    <em class="icon ni ni-check-fill-c" style="top: 6px !important;"></em>سوال ویرایش شد.
                                </span>

                                @endif
                            </div>


                            <h4><span class="q-text-head">صورت سوال:</span>{{ $q_data->text }}</h4>

                            <h5 class="gozine-title">گزینه ها:</h5>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">متن</th>
                                    <th scope="col">*</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $q_data->g1 }}</td>
                                    <td>
                                    <?php
                                        if ($q_data->true == 1) {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-success">گزینه درست</span>
                                        </span>';
                                        } else {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-danger">نادرست</span>
                                        </span>';
                                        }?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>{{ $q_data->g2 }}</td>
                                    <td>
                                        <?php
                                        if ($q_data->true == 2) {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-success">گزینه درست</span>
                                        </span>';
                                        } else {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-danger">نادرست</span>
                                        </span>';
                                        }?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>{{ $q_data->g3 }}</td>
                                    <td>
                                        <?php
                                        if ($q_data->true == 3) {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-success">گزینه درست</span>
                                        </span>';
                                        } else {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-danger">نادرست</span>
                                        </span>';
                                        }?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>{{ $q_data->g4 }}</td>
                                    <td>
                                        <?php
                                        if ($q_data->true == 4) {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-success">گزینه درست</span>
                                        </span>';
                                        } else {
                                            echo '<span class="tb-odr-status">
                                            <span class="badge badge-dot bg-danger">نادرست</span>
                                        </span>';
                                        }?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="btn-edit">
                                <div class="btn-group" >
                                    <a href="/admin/questions/edit/{{$q_data->id}}" class="btn btn-dim btn-primary" ><span>ویرایش سوال</span> <em class="icon ni ni-edit-alt-fill"></em></a>
                                    <a href="/admin/questions/d/{{$q_data->id}}" class="btn btn-dim btn-danger"
                                       onclick="event.preventDefault();
                                   document.getElementById('delete-q').submit();"
                                    ><span>حذف سوال</span><em class="icon ni ni-trash-fill"></em></a>
                                </div>
                            </div>

                            <form id="delete-q" action="/admin/questions/d/{{$q_data->id}}" method="POST" class="d-none">
                                @csrf
                                @method('delete')
                            </form>
                        </div>

                        <!-- .invoice-wrap -->
                    </div>
                    <!-- .invoice -->
                </div>
                <!-- .nk-block -->
            </div>



@endsection




