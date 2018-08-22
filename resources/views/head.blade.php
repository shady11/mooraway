<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $siteTitle }}</title>
<link href="{{ asset('css/app.css?v='. time()) }}" rel="stylesheet">
<link href="{{ asset('css/main.css?v='. time()) }}" rel="stylesheet">

<meta property="og:image" content="{{url('/img/shoes_small.jpg')}}">
<meta property="og:title" content="MooraWay - почта пассажирами самолёта!">
<meta property="og:description"
      content="Улетаешь - сэкономь на билете до 70%, нужно что-то отправить 2-5 часов и посылка на месте!">

<meta name="description" content="{{ $siteDescription }}">
<meta name="keywords" content="{{ $siteKeywords }}">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<style>
    .ui-widget.ui-widget-content {
        max-width: 401px !important;
    }
</style>