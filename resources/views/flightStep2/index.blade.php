@extends('layouts.flight')

@section('content')
<div class="content__block-center content__block-center_green slide-two slide-two_one">
    <div class="content__block-header">
        <span class="icon-closed-green"><span class="icon-sprite"></span></span>
        <span class="text">Создание перелЁта</span>
        <span class="icon-mooraways icon-mooraways-green" style="right: 251px; bottom: -1px"><span class="icon-sprite"></span></span>
        <div class="slider__dots">
            <span class="slider__dot"></span>
            <span class="slider__dot slider__dot_active"></span>
            <span class="slider__dot"></span>
        </div>
    </div>
    {{ Form::open(['url' => '/flight/step2', 'method'=>'post', 'class'=>'content__block-content','novalidate']) }}
        @if ($errors->any())
        <div class="errors errors_form">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <select-user-type-component class="category__item"></select-user-type-component>
        <div class="content__block-btn content__block-btn_mt45">
            <button type="submit" class="button">Далее</button>
        </div>
        {{ Form::hidden('toId', $cityTo->id) }}
        {{ Form::hidden('fromId', $cityFrom->id) }}

    {{ Form::close() }}
</div>
@endsection