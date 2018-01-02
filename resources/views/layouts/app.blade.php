<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
        <meta name="description" content="{{ $meta_description ?? 'I\'m a web developer working at Spatie in Antwerp, Belgium.' }}">
        <meta name="author" content="Sebastian De Deyne">
        @if(isset($canonical_url) && $canonical_url)
            <link rel="canonical" href="{{ $canonical_url }}">
        @endif

        <title>{{ isset($title) ? ($title . ' — Christoph Rumpel') : 'Christoph Rumpel' }}</title>

        @include('feed::links')

        @include('layouts.partials.favicons')

        <link rel="preconnect" href="https://fonts.gstatic.com/">

        <link href="https://fonts.googleapis.com/css?family=Amaranth:700|Lora|Montserrat:700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">

        <script defer src="{{ mix('js/app.js') }}"></script>

        @stack('head')
    </head>
    <body class="font-sans">
        {{ $slot }}

        @if(app()->environment('production'))
            @include('layouts.partials.analytics')
        @endif
    </body>
</html>
