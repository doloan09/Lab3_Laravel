<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>@yield('title')</title>

</head>
<body>
@include('layout.header')

@include('layout.navbar')

@yield('content')

@stack('scripts')

@include('layout.footer')

