<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head')
</head>
<body ng-app="app" ng-controller="AppController">
<div id="app">
    @yield('content')
</div>

@include('scripts')
</body>
</html>
