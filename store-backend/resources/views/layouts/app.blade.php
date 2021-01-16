<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('title')">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <div class="columns">
            <section class="column is-2 p-5">
                @include('layouts.sidebar')
            </section>
            <main class="column is-10 p-5">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
