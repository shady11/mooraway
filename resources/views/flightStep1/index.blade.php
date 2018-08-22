@extends('layouts.flight')

@section('content')
<div class="content__block-center content__block-center_green slide-one">
    <div class="content__block-header">
        <span class="icon-closed-green"><span class="icon-sprite"></span></span>
        <span class="text">Создание перелета</span>
        <span class="icon-mooraways icon-mooraways-green" style="left: 35px; bottom: -1px;"><span class="icon-sprite"></span></span>
        <div class="slider__dots">
            <span class="slider__dot slider__dot_active"></span>
            <span class="slider__dot"></span>
            <span class="slider__dot"></span>
        </div>
    </div>


    {{ Form::open(['url' => '/flight/step1', 'method'=>'post', 'class'=>'content__block-content','novalidate']) }}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        @if(!Auth::check())
            <div class="category__item">
                <div class="category__item-label">Ваш Email*</div>
                <div class="category__input category__input_small category__input_gray">
                    {{ Form::email('email', null, ['placeholder'=>'E-mail']) }}
                </div>
            </div>
        @endif
        <div class="category__item">
            <div class="category__item-label">Дата и время отправления*</div>
            <div class="category__input category__input_p category__input_small category__input_gray category__input_side">
                <datepicker date-format="dd.MM.yyyy" date-set="datetime.date" class="datapicker-toggle" datepicker-append-to="body">
                    {{ Form::text('flightAt', date('d-m-Y'), ['class'=>'input datapicker-toggle__input']) }}
                </datepicker>
                {{ Form::time('flightTimeAt', date('H:00'), ['class'=>'input no-spinners', 'step'=>900]) }}
                <span class="msk">мск</span>
            </div>
        </div>
        <div class="content__block-btn">
            <button class="button">Далее</button>
        </div>
        <a ng-click="login()" class="link">У вас уже есть аккаунт?<span class="text-red">Войти</span></a>
    {{ Form::hidden('toId', $cityTo->id) }}
    {{ Form::hidden('fromId', $cityFrom->id) }}

    {{ Form::close() }}
</div>
@endsection