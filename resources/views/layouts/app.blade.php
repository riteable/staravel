<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Index') - {{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>

    <body>
        <x-layout.navbar />

        <main>
            @yield('content')
        </main>

        <x-layout.footer />
    </body>
</html>
