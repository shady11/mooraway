@extends('layouts.search')
@section('content')
<div class="content__header">
    <a href="/search/{{$flight->fromCity->id}}/{{$flight->toCity->id}}" class="arrow arrow_not-border">
      <span class="icon-arrow-back">
        <span class="icon-sprite"></span>
      </span>
    </a>
    <div class="content__menu">
        <popup-menu2-component type="side"></popup-menu2-component>
    </div>
</div>
<div class="article article_card-sender">
    <div class="avatar ">
        <div class="avatar__cover avatar__cover_big-xxs"> <img class="pic" src="<?= $flight->user->getAvatarUrl() ?>" alt=" " height="140" width="140"> </div>
        <div class="avatar__status">
            <span class="icon-circle"></span>
        </div>
        <span class="avatar__info">
              <span class="name">{{ $flight->user->name }}{{ $flight->user->age ? ', ' . $flight->user->age : '' }}</span>
              <span class="time">Время вылета: {{ $flight->flightAtTime }}</span>
        </span>
    </div>
    <div class="article__instruction">
        <a class="link">Прямо сейчас</a> позвоните отправителю, чтобы договориться о встрече<br> и стоимости передачи посылки.
    </div>

    <show-contacts-btn-component
        flight-phone="{{ $flight->user->phone }}"
        flight-name="{{ $flight->user->name }}"
        flight-id="{{ $flight->id }}"
        is-auth="{{ Auth::check() ? 1 : 0 }}">
    </show-contacts-btn-component>

    <div class="article__footer">
        <div class="article__value">
            <p class="text">Откуда-куда</p>
            <span class="location"><span class="icon-lc-big"><span class="icon-sprite"></span></span>{{ $flight->fromCity->name }} - {{ $flight->toCity->name }}</span>
        </div>
        <div class="article__value">
            <p class="text">Дата отправления</p>
            <span class="date">
                <span class="icon-calendar icon-calendar_h24">
                    <span class="icon-sprite"></span>
                </span>
                <span class="value-text">
                    {{ $flight->flightAtDate }}
                </span>
            </span>
        </div>
        <div class="article__value">
            <p class="text">Цена</p>
            <span class="price"><span class="icon-price"><span class="icon-sprite"></span></span>По договоренности</span>
        </div>
    </div>
</div>
@endsection