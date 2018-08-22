<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head')
</head>
<body ng-app="app" ng-controller="AppController">
<div class="main main_justified_between">
    <div class="sidebar">
        <logo-component type="sidebar"></logo-component>
        <ul class="list">
            <li class="list__item">
                    <span class="icon-circle icon-circle_green">
                        <span class="icon-docum">
                            <span class="icon-sprite"></span>
                        </span>
                    </span>
                <a href="#" class="text">
                    Правила
                </a>
            </li>
            <li class="list__item">
              <span class="icon-circle icon-circle_pink">
                <span class="icon-qu"><span class="icon-sprite"></span></span>
              </span>
                <a href="#" class="text">
                    Помощь
                </a>
            </li>
        </ul>
        <span class="icon-mooraway"></span>
    </div>
    <div class="content">
        @yield('content')
    </div>
</div>
@include('scripts')
</body>
</html>
