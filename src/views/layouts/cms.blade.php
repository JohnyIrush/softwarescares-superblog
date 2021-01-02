<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('superblog/css/app.css') }}" rel="stylesheet">

    <!--From Library Plugin-->
    <link href="{{ asset('superblog/css/Themes/Library/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('superblog/js/Themes/Library/responsive.js') }}" rel="stylesheet">

    <!--From CMS Plugin-->
    <link href="{{ asset('superblog/css/Themes/CMS/dimensions.css') }}" rel="stylesheet">
    <link href="{{ asset('superblog/css/Themes/CMS/positions.css') }}" rel="stylesheet">
    <link href="{{ asset('superblog/css/Themes/CMS/layout.css') }}" rel="stylesheet">

    <!--From Editor Plugin-->
    <link href="{{ asset('superblog/css/Themes/Editor/dimensions.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg-color-dark">
        <main>
            @yield('content')
        </main>
        @include('superblog::Plugins.CMS.widgets.setmedia')
        <!--include('superblog::Plugins.Library.Uploader.widgets.uploader')--> 
    </div>
    <!-- Scripts -->
</body>
</html>
 