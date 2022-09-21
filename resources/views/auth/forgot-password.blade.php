<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Forgot password</title>
</head>
<body>
<div class="md:grid md:grid-cols-3 md:gap-10">
    <div></div>
    <form action="{{ route('password.email') }}" method="POST" class="text-center container md:mt-14 px-4">
        @csrf
        <p class="text-2xl font-bold mb-6">Reset password</p>
        @if(session('status'))
            <div class="alert alert-info text-green-600">
                {{ session('status') }}
            </div>
        @elseif(session('email'))
            <div class="alert alert-info text-red-600">
                {{ session('email') }}
            </div>
        @endif
        <div class="">
            <div class="relative">
                <input type="email" placeholder="Email" name="email" class="border px-12 py-3.5 mt-4 bg-gray-100 w-full" required>
                <div class="grid grid-cols-12">
                    <div></div>
                    <div class="-mt-9 -ml-6 md:-ml-10">
                        <svg width="30" height="20" viewBox="0 0 128 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M116 14.625C122.625 14.625 128 19.5358 128 25.5938C128 29.0443 126.225 32.2893 123.2 34.3687L68.8 71.6625C65.95 73.6049 62.05 73.6049 59.2 71.6625L4.8 34.3687C1.77825 32.2893 0 29.0443 0 25.5938C0 19.5358 5.3725 14.625 12 14.625H116ZM54.4 77.5125C60.1 81.4201 67.9 81.4201 73.6 77.5125L128 40.2188V87.75C128 95.8166 120.825 102.375 112 102.375H16C7.1625 102.375 0 95.8166 0 87.75V40.2188L54.4 77.5125Z" fill="#434343" fill-opacity="0.6"/>
                        </svg>
                    </div>
                </div>
            </div>
            @if($errors->has('email'))
                <div class="text-left pl-16 text-red-600 mt-2">{{ $errors->first('email') }}</div>
            @endif

        </div>
        <div>
            <button type="submit" class="text-white bg-black w-full p-3 mb-4 mt-6 font-bold text-2xl">Reset</button>
        </div>
    </form>
    <div></div>
</div>
</body>
</html>
