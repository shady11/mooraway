@extends('layouts.carrierCabinet')

@section('content')
<div class="bg"></div>
<div class="main main_justified_between">
    <div class="sidebar">
        <logo-component type="sidebar"></logo-component>
        <div class="avatar ">
            <div class="avatar__cover avatar__cover_big">
                @if(Auth::user()->avatar)
                    <img class="pic" src="{{ Auth::user()->getAvatarUrl() }}" ng-click="updateAvatar('{{ Auth::user()->getAvatarUrl() }}')" height="94" width="94">
                @endif
            </div>
            <div class="avatar__status">
            </div>
            <div class="avatar__info">
                <div class="help help_exit">
                <span class="icon-exit">
                  <a  href="{{ url('/logout') }}"  class="icon-sprite"></a>
                </span>
                    <a href="{{ url('/logout') }}" class="text">Выход</a>
                </div>
                <cabinet-sidebar-item-component id="{{ Auth::user()->id}}" item="{{ Auth::user()->name }}" type="name"></cabinet-sidebar-item-component>
                <cabinet-sidebar-item-age-component id="{{ Auth::user()->id}}" item="{{ Auth::user()->age }}"></cabinet-sidebar-item-age-component>
            </div>
        </div>
        <ul class="list list_info">
            <cabinet-sidebar-item-component id="{{ Auth::user()->id}}" item="{{ Auth::user()->email }}" type="email"></cabinet-sidebar-item-component>
            <cabinet-sidebar-item-component id="{{ Auth::user()->id}}" item="{{ Auth::user()->phone }}" type="phone"></cabinet-sidebar-item-component>
        </ul>
        <ul class="list list_status">
            <li class="list__item">
                <a href="#" class="text-info">
            <span class="icon-circle icon-circle_blue">
              <span class="icon-star"><span class="icon-sprite"></span></span>
            </span>
                    Рейтинг: -
                    <span class="hidden-text"><span class="icon-question-small"><span class="icon-sprite"></span></span>В разработке</span>
                </a>
            </li>
            <li class="list__item">
                <a href="#" class="text-info">
            <span class="icon-circle icon-circle_blue">
              <span class="icon-qw"><span class="icon-sprite"></span></span>
            </span>
                    Отзывы: -
                    <span class="hidden-text"><span class="icon-question-small"><span class="icon-sprite"></span></span>В разработке</span>
                </a>
            </li>
            <li class="list__item">
                <a href="#" class="text-info">
            <span class="icon-circle icon-circle_blue">
              <span class="icon-lc"><span class="icon-sprite"></span></span>
            </span>
                    Количество поездок: -
                    <span class="hidden-text"><span class="icon-question-small"><span class="icon-sprite"></span></span>В разработке</span>
                </a>
            </li>
        </ul>
        <a href="#" class="button button_next">Ознакомиться с правилами<span class="icon-arrow-btn"><span class="icon-sprite"></span></span></a>
    </div>
    <div class="content">
        <div class="content__header">
            <a href="/passazhiram" class="arrow arrow_not-border">
          <span class="icon-arrow-back">
            <span class="icon-sprite"></span>
          </span>
            </a>
            <div class="content__menu">
            <popup-menu-component type="side"></popup-menu-component>
            </div>
        </div>
        <div class="cards">
            <add-flight-btn-component class="article cards__item"></add-flight-btn-component>
            @foreach ($flights as $flight)
            <div ng-click="toRoute('/search/{{ $flight->fromId }}/{{ $flight->toId }}/{{ $flight->id }}')" class="article cards__item">
                <div class="cards__status">
                    <flight-status-component
                        class="circle"
                        id="{{ $flight->id }}"
                        status="{{ $flight->status }}">
                    </flight-status-component>
                </div>
                <div class="article__caption">{{ $flight->fromCity->name }} - {{ $flight->toCity->name }}</div>
                <div class="article__value">
                    <p class="text">Дата отправления</p>
                    <span class="date">
                  <span class="icon-calendar"><span class="icon-sprite"></span></span>
                  {{ $flight->flightAtDate }}
                </span>
                </div>
                <div class="article__value">
                    <p class="text">Цена</p>
                    <span class="price">
                  <span class="icon-price"><span class="icon-sprite"></span></span>
                  По договоренности
                </span>
                </div>
                <change-flight-status-select-component
                    id="{{ $flight->id }}"
                    status="{{ $flight->status }}">
                </change-flight-status-select-component>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection