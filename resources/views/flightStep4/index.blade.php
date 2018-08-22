@extends('layouts.flight')

@section('content')
<div class="content__block-center content__block-center_green slide-three">
    <div class="content__block-header">
        <span class="icon-closed-green"><span class="icon-sprite"></span></span>
        <span class="text">Создание перелЁта</span>
        <span class="icon-mooraways icon-mooraways-green" style="right: 148px; bottom: -2px;"><span class="icon-sprite"></span></span>
        <div class="slider__dots">
            <span class="slider__dot"></span>
            <span class="slider__dot"></span>
            <span class="slider__dot slider__dot_active"></span>
        </div>
    </div>
    {{ Form::open(['url' => '/flight/step4', 'method'=>'post', 'class'=>'content__block-content','novalidate', 'enctype'=>'multipart/form-data']) }}
    @if ($errors->any())
    <div class="errors errors_form">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="category__item">
        <div class="category__item-label category__item-label_center">Прикрепите фото вашего профиля</div>
        <div class="category__input category__input_small category__input_center category__input_border">
            <label class="add-file">
                <input type="file" name="avatar">
                <span class="icon-plus-little"><span class="icon-sprite"></span></span>
                <span class="text">Добавить фото</span>
            </label>
        </div>
    </div>
    <div class="category__item">
        <div class="category__item-label category__item-label_center">Создать пароль</div>
        <div class="category__input category__input_small category__input_gray category__input_center">
            <span class="icon-eye"><span class="icon-sprite"></span></span>
            <input class="input" type="password" name="password" placeholder="*******" size="10" >
        </div>
    </div>
    <div class="content__block-btn">
        <button type="submit" class="button">Готово!</button>
    </div>
    {{ Form::hidden('toId', $cityTo->id) }}
    {{ Form::hidden('fromId', $cityFrom->id) }}
    {{ Form::close() }}
</div>
@endsection