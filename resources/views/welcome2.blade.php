@extends('layouts.member.q')
@section('title')
    مسابقه غدیر
@endsection

@section('content')


    <div class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
        <div class="wide-xs-fix">
            <div style="max-width: 540px;" class="nk-block nk-block-middle nk-auth-body ml-0">
                <div class="brand-logo pb-5">
                    <a href="#" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="/assets/images/logo.png" srcset="/assets/images/logo.png 2x" alt="لوگو">
                    </a>
                </div>
                <div class="card text-white bg-info">
                    <div class="card-header ">{{ \App\Models\AdminConfigs::where('name' , 'mosabeghe_name')->first()->config }}</div>
                    <div class="card-inner">
                        <h5 class="card-title ">{{ \App\Models\AdminConfigs::where('name' , 'welcome_text')->first()->config }}</h5>
                        <p class="card-text "></p>
                    </div>
                </div>
                <div class="card text-white bg-info-dim " style="text-align: center">
                    <div class="card-inner">
                        <a href="{{ route('welcome3') }}" class="text-info box-bg-info-link">
                            {{ \App\Models\AdminConfigs::where('name' , 'welcome_btn')->first()->config }}
                            <em class="icon ni ni-back-ios"></em>
                        </a>
                    </div>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title"></h5>
                        <div class="nk-block-des">
                            <p></p>
                        </div>
                    </div>


                </div>
                <!-- .nk-block-head -->

                <!-- form -->
            </div>

        </div>
    </div>



{{--    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">--}}

{{--        <div class="absolute-top-right d-lg-none p-3 p-sm-5">--}}
{{--            <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>--}}
{{--        </div>--}}



{{--    </div>--}}
{{--    <!-- nk-split-content -->--}}
{{--    <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right toggle-screen-lg" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">--}}
{{--        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">--}}
{{--            <div class="slider-init slick-initialized slick-slider slick-dotted" data-slick="{&quot;dots&quot;:true, &quot;arrows&quot;:false}">--}}
{{--                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3234px; transform: translate3d(462px, 0px, 0px);"><div class="slider-item slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 462px;" tabindex="-1">--}}
{{--                            <div class="nk-feature nk-feature-center">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="slider-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 462px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">--}}
{{--                            <div class="nk-feature nk-feature-center">--}}
{{--                                {{ \App\Models\AdminConfigs::where('name' , 'group_name')->first()->config }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- .slider-init -->--}}
{{--            </div>--}}
{{--            <!-- .slider-wrap -->--}}
{{--        </div>--}}
{{--        <!-- nk-split-content -->--}}
{{--    </div>--}}

@endsection
