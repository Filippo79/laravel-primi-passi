<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>La Molisana @yield('titolo')</title>
    </head>
    <body>
        @include('partials.header')
        @yield('main')
        @include('partials.footer')
        @yield('script')
    </body>
</html>
