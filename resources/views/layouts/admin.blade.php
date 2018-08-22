<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
            min-width: auto;
            max-width: 100%;
            width: 100%;
        }

        ._720kb-datepicker-calendar {
            width: auto;
            top: 100px;
        }

        datepicker{
            width: 100% !important;
        }
    </style>
</head>
<body ng-app="app">
@yield('content')

<script>
    var token = '{{ csrf_token() }}';
</script>

<script src="{{ asset('js/app.js?v=1') }}"></script>


</body>
</html>
