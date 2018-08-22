@extends('layouts.app')

@section('content')
    <div class="banner" style="background-image: url('interface/img/slide-sub.jpg')">
        <div class="banner__opacity"></div>
        <div class="banner__content">
            <h2 class="banner__title">Почта пассажирами самолёта</h2>
            <slider-top-component></slider-top-component>
            <div class="category category_not-bg">
                <find-sender-component></find-sender-component>
            </div>
            <div class="video">
                <script src="https://fast.wistia.com/embed/medias/rmpguvu3zm.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                <span class="wistia_embed wistia_async_rmpguvu3zm popover=true popoverContent=link" style="display:inline">
                    <a>
                        <span class="icon-play-pink"><span class="icon-sprite"></span></span>
                        <span class="text">Как работает?</span>
                    </a>
                </span>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <h2 class="content__title">Посылки, которые отправляют</h2>
            <carousel-component class="carousel-slider"></carousel-component>
            <slider-component></slider-component>
            <h2 class="content__title">Популярные вопросы о сервисе</h2>
            <questions-component class="acardion"></questions-component>
            <slider-bottom-component></slider-bottom-component>
        </div>
    </div>
@endsection