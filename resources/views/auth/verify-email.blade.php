<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>Verify-email</title>
</head>
<body>
    <div class="grid grid-cols-3 mt-10">
        <div class="hidden md:block col-span-1"></div>
        <div class="border p-4 h-56 col-span-3 md:col-span-1">
            <div class="text-center font-bold text-2xl">Verify - email</div>
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <button type="submit" class="w-full border rounded-xl p-4 mt-16 bg-black text-white font-bold border-gray-400">Send email</button>
            </form>
        </div>
        <div class="hidden md:block col-span-1"></div>
    </div>
</body>
</html>
