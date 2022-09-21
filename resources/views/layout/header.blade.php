<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>
<body>
    @if(session('message'))
        <div class="text-white text-center bg-green-500 py-4">
            {{ session('message') }}
        </div>
    @endif
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
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-3">

                </div>
                <div class="col-span-2">
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 items-center text-gray-300 md:text-black pl-32 mt-2 md:pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-7 h-7 md:w-8 md:h-8 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="simple-search" class="text-lg rounded-lg block w-full pl-12 p-2.5 placeholder-black hidden md:block" placeholder="SEARCH" required>
                    </div>
                </div>
                <div id="dropdown-wrapper-category" class="hidden md:block inline-block text-sm md:text-lg mt-2">
                    <div class="relative">
                        <div onclick="toggle()" class="">
                            <img src="/img/img_1.png" class="w-8 h-8 rounded-full">
                        </div>
                    </div>
                    <div id="menu" class="hidden flex flex-col bg-white drop-shadow-md absolute -ml-20">
                        @if($user)
                            <div class="px-5 py-3 hover:bg-gray-300 border-b border-gray-200 hover:bg-white" href="">
                                <div class="flex">
                                    <div>
                                        <img src="/img/img_1.png" class="w-6 h-6 rounded-full">
                                    </div>
                                    <p class="ml-3 font-bold">{{ $user->name }}</p>
                                </div>
                                <p class="text-sm text-gray-400 text-center">{{ $user->email }}</p>
                            </div>
                            <a class="px-5 py-3 hover:bg-gray-300 border-b border-gray-200 flex" href="">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="ml-3">Personal</p>
                            </a>
                            <a class="px-5 py-3 hover:bg-gray-300 border-b border-gray-200 flex" href="{{ route('logout') }}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </div>
                                <p class="ml-3">Logout</p>
                            </a>
                        @else
                            <a class="px-5 py-3 hover:bg-gray-300 border-b border-gray-200 flex" href="{{ route('register.request') }}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                                <p class="ml-3">Sign Up</p>
                            </a>
                            <a class="px-5 py-3 hover:bg-gray-300 border-b border-gray-200 flex" href="{{ route('login.request') }}">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                    </svg>
                                </div>
                                <p class="ml-3">Login</p>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            var menuCategory = document.getElementById("menu");

            function toggle() {
                if (menuCategory.classList.contains('hidden')) {
                    menuCategory.classList.remove('hidden');
                } else {
                    menuCategory.classList.add('hidden');
                }
            }
            // close the menu when the user clicks outside of it
            window.onclick = function (event) {
                var dropdownWrapper = document.getElementById('dropdown-wrapper-category');
                if (!dropdownWrapper.contains(event.target) && !menuCategory.classList.contains('hidden')) {
                    menuCategory.classList.add('hidden');
                }
            }
        </script>
    @endpush
