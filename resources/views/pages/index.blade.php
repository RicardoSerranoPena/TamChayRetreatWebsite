@extends('layouts.app')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5">
                    <figure class="img-absolute">
                        <img src="images/white_backpacker.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <img src="images/tay_ninh.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                    <h2 class="heading">@lang('texts.our_philosophy')</h2>
                    <p class="mb-4">@lang('texts.our_philosophy_prgrph')</p>
                    <p><a href="/about" class="btn btn-primary text-white py-2 mr-3">@lang('texts.learn_more')</a></p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h2 class="heading" data-aos="fade-up">@lang('texts.rooms')</h2>
                    <p data-aos="fade-up" data-aos-delay="100">@lang('texts.rooms_prgrph')</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="/rooms" class="room">
                        <figure class="img-wrap">
                            <img src="images/img_3.jpg" alt="standard bed" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>@lang('texts.standard_bed')</h2>
                            <span class="text-uppercase letter-spacing-1">@lang('texts.standard_bed_price')</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="/rooms" class="room">
                        <figure class="img-wrap">
                            <img src="images/img_2.jpg" alt="double room" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>@lang('texts.double_room')</h2>
                            <span class="text-uppercase letter-spacing-1">@lang('texts.double_room_price')</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="/rooms" class="room">
                        <figure class="img-wrap">
                            <img src="images/img_1.jpg" alt="double double room" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>@lang('texts.single_room')</h2>
                            <span class="text-uppercase letter-spacing-1">@lang('texts.single_room_price')</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
