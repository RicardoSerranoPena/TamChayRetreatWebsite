@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-9">
                <h2 class="heading" data-aos="fade">@lang('texts.expectations')</h2>
                <p data-aos="fade">@lang('texts.expectations_prgrph')</p>
            </div>
        </div>

        <div class="row justify-content-center text-left mb-5">
            <div class="col-md-9">
                <h4 data-aos="fade-up">1. <u>@lang('texts.guideline_one')</u></h4>
                <p data-aos="fade-up">@lang('texts.guideline_one_prgrph')</p>
                <br>
                <h4 data-aos="fade-up">2. <u>@lang('texts.guideline_two')</u></h4>
                <p data-aos="fade-up">@lang('texts.guideline_two_prgrph')</p>
                <br>
                <h4 data-aos="fade-up">3. <u>@lang('texts.guideline_three')</u></h4>
                <p data-aos="fade-up">@lang('texts.guideline_three_prgrph')</p>
                <br>
                <h4 data-aos="fade-up">4. <u>@lang('texts.guideline_four')</u></h4>
                <p data-aos="fade-up">@lang('texts.guideline_four_prgrph')</p>
                <br>
                <h4 data-aos="fade-up">5. <u>@lang('texts.guideline_five')</u></h4>
                <p data-aos="fade-up">@lang('texts.guideline_five_prgrph')</p>
            </div>
        </div>

    </div>
</section>

@endsection
