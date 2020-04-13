@extends('layouts.app')

@section('content')

{{--<section class="section pb-4"  >--}}
{{--    <div class="container">--}}

{{--        <div class="row check-availabilty" id="next">--}}
{{--            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">--}}

{{--                <form action="index.php?page=booking">--}}
{{--                    <input type="hidden" name="page" value="booking"/>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">--}}
{{--                            <label for="checkin_date" class="font-weight-bold text-black">@lang('texts.check_in_date')</label>--}}
{{--                            <div class="field-icon-wrap">--}}
{{--                                <div class="icon"><span class="icon-calendar"></span></div>--}}
{{--                                <input type="text" id="checkin_date" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">--}}
{{--                            <label for="checkout_date" class="font-weight-bold text-black">@lang('texts.check_out_date')</label>--}}
{{--                            <div class="field-icon-wrap">--}}
{{--                                <div class="icon"><span class="icon-calendar"></span></div>--}}
{{--                                <input type="text" id="checkout_date" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-3 mb-md-0 col-lg-3">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 mb-3 mb-md-0">--}}
{{--                                    <label for="adults" class="font-weight-bold text-black">@lang('texts.guests')</label>--}}
{{--                                    <div class="field-icon-wrap">--}}
{{--                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>--}}
{{--                                        <select name="adults" id="adults" class="form-control">--}}
{{--                                            <option value="">1</option>--}}
{{--                                            <option value="">2</option>--}}
{{--                                            <option value="">3</option>--}}
{{--                                            <option value="">4</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-lg-3 align-self-end">--}}
{{--                            <button class="btn btn-primary btn-block text-white">@lang('texts.search')</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

    <div class="container py-5">

        <div class="row">

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <a class="room">
                    <figure class="img-wrap">
                        <img src="images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                        <h2>@lang('texts.standard_bed')</h2>
                        <span class="text-uppercase letter-spacing-1">@lang('texts.standard_bed_price')</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <a class="room">
                    <figure class="img-wrap">
                        <img src="images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                        <h2>@lang('texts.double_room')</h2>
                        <span class="text-uppercase letter-spacing-1">@lang('texts.double_room_price')</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <a class="room">
                    <figure class="img-wrap">
                        <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                        <h2>@lang('texts.single_room')</h2>
                        <span class="text-uppercase letter-spacing-1">@lang('texts.single_room_price')</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade">@lang('texts.more_than_vacation')</h2>
                <p data-aos="fade">@lang('texts.rooms_prgrph')</p>
            </div>
        </div>

        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
            <a href="index.php?page=booking" class="image d-block bg-image-3" style="background-image: url('images/img_3.jpg');"></a>
            <div class="text">
                <span class="d-block mb-4"><span class="display-4 text-primary">@lang('texts.s_b_price')</span> <span class="text-uppercase letter-spacing-2">@lang('texts.per_night')</span> </span>
                <h2 class="mb-4">@lang('texts.standard_bed')</h2>
                <p>@lang('texts.standard_bed_description')</p>
                <p><a href="index.php?page=booking" class="btn btn-primary text-white">@lang('texts.book_now')</a></p>
            </div>
        </div>

        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
            <a href="index.php?page=booking" class="image d-block bg-image-2 order-2" style="background-image: url('images/img_2.jpg');"></a>
            <div class="text order-1">
                <span class="d-block mb-4"><span class="display-4 text-primary">@lang('texts.d_r_price')</span> <span class="text-uppercase letter-spacing-2">@lang('texts.per_night')</span> </span>
                <h2 class="mb-4">@lang('texts.double_room')</h2>
                <p>@lang('texts.double_room_description')</p>
                <p><a href="index.php?page=booking" class="btn btn-primary text-white">@lang('texts.book_now')</a></p>
            </div>
        </div>

        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
            <a href="index.php?page=booking" class="image d-block bg-image-2" style="background-image: url('images/img_1.jpg');"></a>
            <div class="text">
                <span class="d-block mb-4"><span class="display-4 text-primary">@lang('texts.s_r_price')</span> <span class="text-uppercase letter-spacing-2">@lang('texts.per_night')</span> </span>
                <h2 class="mb-4">@lang('texts.single_room')</h2>
                <p>@lang('texts.single_room_description')</p>
                <p><a href="index.php?page=booking" class="btn btn-primary text-white">@lang('texts.book_now')</a></p>
            </div>
        </div>

    </div>

@endsection
