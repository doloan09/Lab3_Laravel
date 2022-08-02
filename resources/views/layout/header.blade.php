<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>
<body>
    <div class="md:mx-16 mt-10">
        <div class="mx-4 md:mx-0 grid grid-cols-3 gap-4 md:border-dashed md:border-b-2 md:border-solid md:pb-2">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-1 space-y-1 md:space-y-2">
                    <div class="w-6 h-0.5 md:w-8 md:h-1 bg-gray-300"></div>
                    <div class="w-6 h-0.5 md:w-8 md:h-1 bg-gray-300"></div>
                    <div class="w-6 h-0.5 md:w-8 md:h-1 bg-gray-300"></div>
                </div>
                <div class="col-span-1 hidden md:block">
                    <p class="font-black text-xl" style="text-shadow: 1px 2px 5px black;">SECTIONS</p>
                </div>
            </div>
            <div class="text-gray-500 hidden md:block">
                <p class="text-center">Friday, February 24, 2017</p>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-2">

                </div>
                <div class="col-span-1 ">
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 items-center text-gray-300 md:text-black pl-32 mt-2 md:pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-7 h-7 md:w-8 md:h-8 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="simple-search" class="text-lg rounded-lg block w-full pl-12 p-2.5 placeholder-black hidden md:block" placeholder="SEARCH" required>
                    </div>
                </div>
                <div>
                    <a href="{{ route('login.request') }}" class="bg-gray-200 px-4 py-2 text-xl text-center font-light hidden md:block">Log in</a>
                </div>
            </div>
        </div>
    </div>
