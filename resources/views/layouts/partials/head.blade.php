<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
<meta name="description"
      content="Hi I am Christoph, a web developer from Austria. I blog and talk about PHP, Laravel, chatbots and more.">
<meta name="author" content="Christoph Rumpel">
@if(isset($canonical_url) && $canonical_url)
    <link rel="canonical" href="{{ $canonical_url }}">
@endif

<title>{{ isset($title) ? ($title . ' — Christoph Rumpel') : 'Christoph Rumpel - Blog, Talks and books' }}</title>

@include('feed::links')

@include('layouts.partials.favicons-blog')


<link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">

<script defer src="{{ mix('js/app.js') }}"></script>

@stack('head')