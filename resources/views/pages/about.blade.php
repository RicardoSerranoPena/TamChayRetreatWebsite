@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-7 mb-5 text-center">
                <h2 class="heading">@lang('texts.what_we_do')</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                <figure class="img-absolute">
                    <img src="images/white_backpacker.jpg" alt="Image" class="img-fluid">
                </figure>
                <img src="images/tay_ninh.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                <h1>@lang('texts.our_philosophy')</h1>
                <p class="mb-4">@lang('texts.our_philosophy_prgrph')</p>
            </div>

        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7 mb-5">
                <h2 class="heading" data-aos="fade">@lang('texts.milestones')</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="timeline-item" date-is="@lang('texts.future')">
                    <h3>@lang('texts.tamchay_future')</h3>
                    <p>
                        @lang('texts.coming_soon')
                    </p>
                </div>
                <div class="timeline-item" date-is='2020'>
                    <h3>@lang('texts.tamchay_birth')</h3>
                    <p>
                        @lang('texts.tamchay_birth_prgrph')
                    </p>
                </div>
                <div class="timeline-item" date-is='2019'>
                    <h3>@lang('texts.expansion')</h3>
                    <p>
                        @lang('texts.expansion_prgrph')
                    </p>
                </div>
                <div class="timeline-item" date-is='2017'>
                    <h3>@lang('texts.brand_born')</h3>
                    <p>
                        @lang('texts.brand_born_prgrph')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7 mb-5">
                <h2 class="heading">@lang('texts.team')</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="block-2">
                    <div class="flipper">
                        <div class="front" style="background-image: url(images/ngoc_pham.jpg);">
                            <div class="box">
                                <h1>Ngoc Pham</h1>
                                <p>@lang('texts.project_director')</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>@lang('texts.ngoc_description')</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/ngoc_pham.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Ngoc Pham <span
                                            class="position">@lang('texts.project_director')</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-2"> <!-- .hover -->
                    <div class="flipper">
                        <div class="front" style="background-image: url(images/thuy.jpg);">
                            <div class="box">
                                <h1>Thuy Nguyen</h1>
                                <p>@lang('texts.advisor')</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>@lang('texts.thuy_description')</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/thuy.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Thuy Nguyen<span
                                            class="position">@lang('texts.advisor')</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>

        </div>
    </div>

@endsection
