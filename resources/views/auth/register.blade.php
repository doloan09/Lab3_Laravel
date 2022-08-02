<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Register</title>
</head>
<body>
<div class="md:grid md:grid-cols-3 md:gap-10 ">
    <div></div>
    <form action="{{ route('register') }}" method="POST" class="border text-center container md:mt-14 h-screen md:h-auto rounded-xl shadow-lg shadow-indigo-500/40">
        @csrf
        <p class="my-10 font-bold text-5xl">Sign Up</p>
        <div class="md:mt-20">
            <div class="relative">
                <input type="User name" placeholder="User name" name="name" class="border pl-12 p-3.5 mt-2 w-4/5 bg-gray-100" required>
                <div class="grid grid-cols-12">
                    <div></div>
                    <div class="-mt-10 ml-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.121 17.804C7.21942 16.6179 9.58958 15.9963 12 16C14.5 16 16.847 16.655 18.879 17.804H5.121ZM15 10C15 10.7956 14.6839 11.5587 14.1213 12.1213C13.5587 12.6839 12.7956 13 12 13C11.2044 13 10.4413 12.6839 9.87868 12.1213C9.31607 11.5587 9 10.7956 9 10C9 9.20435 9.31607 8.44129 9.87868 7.87868C10.4413 7.31607 11.2044 7 12 7C12.7956 7 13.5587 7.31607 14.1213 7.87868C14.6839 8.44129 15 9.20435 15 10V10ZM21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z" stroke="#9F9B9B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            @if($errors->has('name'))
                <div class="text-left pl-16 text-red-600 mt-2">{{ $errors->first('name') }}</div>
            @endif
            <div class="relative">
                <input type="email" placeholder="Email" name="email" class="border pl-12 p-3.5 mt-6 w-4/5 bg-gray-100" required>
                <div class="grid grid-cols-12">
                    <div></div>
                    <div class="-mt-10 ml-4">
                        <svg width="30" height="20" viewBox="0 0 128 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M116 14.625C122.625 14.625 128 19.5358 128 25.5938C128 29.0443 126.225 32.2893 123.2 34.3687L68.8 71.6625C65.95 73.6049 62.05 73.6049 59.2 71.6625L4.8 34.3687C1.77825 32.2893 0 29.0443 0 25.5938C0 19.5358 5.3725 14.625 12 14.625H116ZM54.4 77.5125C60.1 81.4201 67.9 81.4201 73.6 77.5125L128 40.2188V87.75C128 95.8166 120.825 102.375 112 102.375H16C7.1625 102.375 0 95.8166 0 87.75V40.2188L54.4 77.5125Z" fill="#434343" fill-opacity="0.6"/>
                        </svg>
                    </div>
                </div>
            </div>
            @if($errors->has('email'))
                <div class="text-left pl-16 text-red-600 mt-2">{{ $errors->first('email') }}</div>
            @endif
            <div class="relative">
                <input type="password" placeholder="Password" name="password" class="border pl-12 p-3.5 mt-6 w-4/5 bg-gray-100" required>
                <div class="grid grid-cols-12">
                    <div></div>
                    <div class="-mt-10 ml-4">
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="23" height="24" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_5_230" transform="translate(-0.0217391) scale(0.00289855 0.00277778)"/>
                                </pattern>
                                <image id="image0_5_230" width="360" height="360" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            @if($errors->has('password'))
                <div class="text-left pl-16 text-red-600 mt-2">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <div>
            <button class="text-white bg-black w-4/5 p-3 mt-24 mb-16 font-bold text-2xl">Sign Up</button>
        </div>
        <div class="grid grid-cols-10 mb-20">
            <div class="col-span-1"></div>
            <div class="col-span-4 mr-2">
                <div class="grid grid-cols-4 border py-2">
                    <div class="md:col-span-1"></div>
                    <img src="img/img_19.png" class="w-1/2 col-span-1 md:col-span-1 md:w-4/12">
                    <p class="-ml-2 md:col-span-1 md:-ml-10">Facebook</p>
                    <div class="md:col-span-1"></div>
                </div>
            </div>
            <div class="col-span-4 mr-2">
                <div class="grid grid-cols-4 border py-2">
                    <div class="md:col-span-1"></div>
                    <img src="img/img_20.png" class="w-1/2 md:col-span-1 md:w-4/12 mt-1">
                    <p class="md:col-span-1 md:-ml-12">Google</p>
                    <div class="md:col-span-1"></div>
                </div>
            </div>
            <div class="col-span-1"></div>
        </div>
        <div class="grid grid-cols-3 md:grid md:grid-cols-6 mb-6 md:mt-36">
            <div class="hidden md:block"></div>
            <div class="text-right col-span-2">
                Already have account?
            </div>
            <div class="col-span-1 text-left pl-4 text-blue-700">
                <a href="{{ route('login.request') }}">Login</a>
            </div>
            <div class="hidden md:block"></div>
        </div>
    </form>
    <div></div>
</div>
</body>
</html>
