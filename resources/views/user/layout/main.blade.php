
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>@yield('title')</title>
</head>
<body class="font-roboto">
    <div class="px-4 md:px-10 md:h-screen border-b-2">
        <div class="grid grid-cols-12 my-10 border-b-2">
            <p class="col-span-10 md:col-span-11 text-3xl font-bold">Admin</p>
            <a href="{{ route('logout') }}" class="text-right text-blue-700 cursor-pointer">Logout</a>
        </div>
        @yield('content')
    </div>

    @include('layout.footer')
</body>
</html>


