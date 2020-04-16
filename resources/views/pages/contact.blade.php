@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-7">
            {!! Form::open(['action' => 'MessagesController@store', 'method' => 'POST', 'class' => 'bg-white p-md-5 p-4 mb-5 border']) !!}
            <div class="row">
                <div class="col-md-6 form-group">
                    {{Form::label('name', Lang::get('texts.name') )}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => Lang::get('texts.name') ]) }}
                </div>
                <div class="col-md-6 form-group">
                    {{Form::label('phone', Lang::get('texts.phone') )}}
                    {{Form::text('phone', '', ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    {{Form::label('email', Lang::get('texts.email') )}}
                    {{Form::email('email', '', ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12 form-group">
                    {{Form::label('message', Lang::get('texts.message_or_questions') )}}
                    {{Form::textarea('message', '', ['class' => 'form-control', 'cols' => '30', 'rows' => '8']) }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    {{Form::submit(Lang::get('texts.send_message'), ['class' => 'btn btn-primary text-white font-weight-bold'])}}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-10 ml-auto contact-info pt-md-5">
                    <p><span class="d-block">@lang('texts.address')</span>  <a target="_blank" href="@lang('texts.address_gmaps_link')"><span>@lang('texts.actual_address')</span></a></p>
                    <p><span class="d-block">@lang('texts.phone')</span> <span>@lang('texts.actual_phone')</span></p>
                    <p><span class="d-block">@lang('texts.email')</span> <span>@lang('texts.actual_email')</span></p>
                    <p><span class="d-block">@lang('texts.facebook')</span> <a href="@lang('texts.facebook_link')">facebook.com/tamchayhomestay</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection