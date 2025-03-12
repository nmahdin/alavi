@extends('layouts.member.q')
@section('title')
    مسابقه غدیر
@endsection

@section('content')


    <div class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
        <div class="wide-xs-fix">

            <div style="max-width: 540px;" class="nk-block nk-block-middle nk-auth-body ml-0">

                @if($start)
                    <div class="card bg-gray-dim text-gray">
                        <div class="card-inner">
                            <p class="card-text ">
                                نام:
                                <strong class="fw-bold">{{ \Illuminate\Support\Facades\Auth::user()->name }}</strong>
                            </p>
                            <p class="card-text ">
                                شماره موبایل:
                                <strong class="fw-bold">{{ \Illuminate\Support\Facades\Auth::user()->number }}</strong>
                            </p>
                        </div>
                    </div>
                    <div class="card text-white bg-teal">
                        <div class="card-header text-white">{{ \App\Models\AdminConfigs::where('name' , 'enable_start_title')->first()->config }}</div>
                        <div class="card-inner">
                            <p class="card-text ">{{ \App\Models\AdminConfigs::where('name' , 'enable_start_text')->first()->config }}</p>
                        </div>
                    </div>
                    <div class="card text-teal bg-teal-dim" style="text-align: center">
                        <div class="card-inner">
                            <a href="{{ route('show.questions') }}" class="text-teal">
                                {{ \App\Models\AdminConfigs::where('name' , 'start_btn')->first()->config }}
                                <em class="icon ni ni-back-ios icon-m-left"></em>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="card text-white bg-danger">
                        <div class="card-inner">
                            <p class="card-text ">
                                <em class="icon ni ni-cross-circle"></em>
                                {{ \App\Models\AdminConfigs::where('name' , 'off_start_text')->first()->config }}
                            </p>
                        </div>
                    </div>
                    <div class="card bg-purple-dim">
                        <div class="card-inner">
                            <a class="link-indigo" style="margin: 5px" href="{{ route('welcome3') }}">
                                <em class="icon ni ni-reload"></em><span>بارگذاری مجدد</span></a>
                        </div>
                    </div>
                    <div class="card bg-danger-dim">
                        <div class="card-inner">
                            <a class="link-danger" style="margin: 5px" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em
                                    class="icon ni ni-signout"></em><span>خروج از مسابقه</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>


@endsection
