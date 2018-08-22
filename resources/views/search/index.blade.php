@extends('layouts.search')
@section('content')
<div class="content__header">
    <a href="/" class="arrow">
          <span class="icon-arrow-back">
            <span class="icon-sprite"></span>
          </span>
    </a>
    <div class="content__header-text">
        <span class="description">Список отправителей</span>
        <span class="sity">
            <span class="icon-location-small">
              <span class="icon-sprite"></span>
            </span>
            <span class="text">{{ $cityFrom->name }} - {{ $cityTo->name }}</span>
          </span>
    </div>

    <div class="content__menu">
        <div class="content__filter">
            <span class="text">
              Фильтр:
              <span class="text__location">Ближе к отъезду</span>
            </span>
        </div>
        <popup-menu2-component type="side"></popup-menu2-component>
    </div>
</div>

@if($count > 0)
    <search-list-component active-id="{{ $id }}" from-id="{{ $fromId }}" to-id="{{ $toId }}"></search-list-component>
@else
<div class="article article_center article_social">
    <h3 class="article__description">Отправителей по этому направлению еще нет..</h3>
    <p class="article__text">
        Почта только начала работать <a class="link">в вашем регионе</a>, поделитесь записью
        в соц. сетях вдруг Ваши друзья как раз направляются в ту сторону!
    </p>
    <share-component class="social"></share-component>
    <p class="article__text">
        <a class="link">Нужно</a> сделать всего одну публикацию!
    </p>
</div>

<div class="article article_center article_send">
    <h3 class="article__description">Вы скоро улетаете? Получите от 30 до 200 $</h3>
    <p class="article__text">
        <a href="/passazhiram" class="button button_next">Стать отправителем!</a>
    </p>
</div>
@endif
@endsection