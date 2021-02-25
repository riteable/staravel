<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Index') - {{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link rel="manifest" href="{{ asset('web-manifest.json') }}">

        <link rel="icon" href="{{ manifest_icon_search('sizes', '16x16', 'web-manifest.json') }}">

        <livewire:styles />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap">
        <link rel="stylesheet" href="{{ manifest_get('app.css', 'assets-manifest.json') }}">

        <script src="{{ manifest_get('vendor.js', 'assets-manifest.json') }}" defer></script>
        <script src="{{ manifest_get('app.js', 'assets-manifest.json') }}" defer></script>
    </head>

    <body>
        <x-layout.header />

        <main>
            @yield('content')
        </main>

        <x-layout.footer />
    </body>
</html>
