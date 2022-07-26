@extends('layout.master')

@section('title')
    {{$item}}
@endsection

@section('content')

    <div class="md:mx-16 mt-10 mx-4 border-b-2 font-roboto">
    <div class="my-10 flex flex-wrap">
        <div class=" border-black border-l-4 pl-4 cursor-pointer">
            <a href="/home">Home ></a>
        </div>
        <div class=" px-4 cursor-pointer">
            <a href="/list-news/{{$name}}">{{$name}} > </a>
        </div>
        <div class="text-blue-700 cursor-pointer"> {{$item}}</div>
    </div>
    <div class="grid grid-cols-4 gap-6 relative">
        <div class="col-span-4 md:col-span-3">
{{--            <div class="font-bold text-gray-600 border-gray-300 text-center bg-[#FBFF22] w-5/12 md:w-2/12 py-2  text-lg">{{ strtoupper($name)}}</div>--}}
            <div
                class="bg-gray-300 text-black font-bold text-left px-4 py-2 text-xl md:text-2xl">{{ strtoupper($name)}}
            </div>
            <div class="font-bold text-black text-3xl md:text-4xl mt-6">{{$item}}</div>
            <div class="mt-4 md:mt-6 text-gray-400 grid grid-cols-6">
                <div class="col-span-3 md:col-span-1">
                    <div class="float-left md:mt-1 mr-2">
                        <svg width="25" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6V9L11.25 11.25L9 6ZM15.75 9C15.75 9.88642 15.5754 10.7642 15.2362 11.5831C14.897 12.4021 14.3998 13.1462 13.773 13.773C13.1462 14.3998 12.4021 14.897 11.5831 15.2362C10.7642 15.5754 9.88642 15.75 9 15.75C8.11358 15.75 7.23583 15.5754 6.41689 15.2362C5.59794 14.897 4.85382 14.3998 4.22703 13.773C3.60023 13.1462 3.10303 12.4021 2.76381 11.5831C2.42459 10.7642 2.25 9.88642 2.25 9C2.25 7.20979 2.96116 5.4929 4.22703 4.22703C5.4929 2.96116 7.20979 2.25 9 2.25C10.7902 2.25 12.5071 2.96116 13.773 4.22703C15.0388 5.4929 15.75 7.20979 15.75 9Z" stroke="#434343" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="text-sm md:text-lg">25 thg 7, 2022</p>
                </div>
                <div class="col-span-4 hidden md:block"></div>
                <div class="col-span-3 md:col-span-1 grid grid-cols-2">
                    <div>
                        <div class="float-left md:mt-1 mr-2">
                            <svg width="25" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 10C12.5 10.663 12.2366 11.2989 11.7678 11.7678C11.2989 12.2366 10.663 12.5 10 12.5C9.33696 12.5 8.70107 12.2366 8.23223 11.7678C7.76339 11.2989 7.5 10.663 7.5 10C7.5 9.33696 7.76339 8.70107 8.23223 8.23223C8.70107 7.76339 9.33696 7.5 10 7.5C10.663 7.5 11.2989 7.76339 11.7678 8.23223C12.2366 8.70107 12.5 9.33696 12.5 10V10Z" stroke="#434343" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.04833 10C3.11 6.61919 6.26917 4.16669 10 4.16669C13.7317 4.16669 16.89 6.61919 17.9517 10C16.89 13.3809 13.7317 15.8334 10 15.8334C6.26917 15.8334 3.11 13.3809 2.04833 10V10Z" stroke="#434343" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-sm md:text-lg">22</p>
                    </div>
                    <div>
                        <div class="float-left md:mt-1 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <p class="text-sm md:text-lg">22</p>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <img src="/img/img_1.png" class="w-full h-3/5">
            </div>
            <div class="mb-16 mt-4">
                <div class="grid grid-cols-1">
                    <p class="pb-4 text-sm">Clues from a propaganda photo reveal details about North Korea’s </p>
                    <p class="mb-6 text-xl leading-loose">
                        Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                    </p>
                    <p class="mb-6 text-xl leading-loose ">
                        Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                        Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                    </p>
                    <p class="text-2xl font-bold md:mr-10 mt-32 text-right">John</p>
                </div>
                <div class="grid grid-cols-12 md:grid-cols-12 mt-10">
                    <div class="col-span-1 px-2 py-4 md:p-4 border md:w-3/6">
                        <a href="/list-news/{{$name}}">
                            <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5.5189H19M5 9.71858L1 5.5189L5 9.71858ZM1 5.5189L5 1.31921L1 5.5189Z" stroke="#434343" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="border col-span-2 md:col-span-1 ml-2">
                        <div class="float-left pr-3 ml-2 pt-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14V4M8 7H5C4.46957 7 3.96086 7.21071 3.58579 7.58579C3.21071 7.96086 3 8.46957 3 9V18C3 18.5304 3.21071 19.0391 3.58579 19.4142C3.96086 19.7893 4.46957 20 5 20H19C19.5304 20 20.0391 19.7893 20.4142 19.4142C20.7893 19.0391 21 18.5304 21 18V9C21 8.46957 20.7893 7.96086 20.4142 7.58579C20.0391 7.21071 19.5304 7 19 7H16H8ZM15 11L12 14L15 11ZM12 14L9 11L12 14Z" stroke="#434343" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="pt-2 font-bold text-gray-600 hidden md:block">Save</p>
                    </div>
                    <div class="col-span-3 md:col-span-7"></div>
                    <div class="hidden md:block col-span-3 md:col-span-1 ml-6 mt-4 font-bold text-gray-600 text-right pr-4">Share</div>
                    <div class="col-span-6 md:col-span-2">
                        <div class="grid grid-cols-3">
                            <div class=" border w-11 h-11 p-2.5 rounded-full">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.6875 10C19.6875 4.64844 15.3516 0.3125 10 0.3125C4.64844 0.3125 0.3125 4.64844 0.3125 10C0.3125 14.8352 3.85508 18.843 8.48633 19.5703V12.8004H6.02539V10H8.48633V7.86563C8.48633 5.43789 9.93164 4.09687 12.1453 4.09687C13.2055 4.09687 14.3141 4.28594 14.3141 4.28594V6.66875H13.0922C11.8891 6.66875 11.5137 7.41562 11.5137 8.18164V10H14.2004L13.7707 12.8004H11.5137V19.5703C16.1449 18.843 19.6875 14.8352 19.6875 10Z" fill="#434343" fill-opacity="0.6"/>
                                </svg>
                            </div>
                            <div class=" border w-11 h-11 p-2.5 rounded-full">
                                <svg width="22" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.9162 5.92641C26.9353 6.10406 26.9353 6.28176 26.9353 6.45941C26.9353 11.8782 20.7487 18.1218 9.44162 18.1218C5.95811 18.1218 2.72209 17.4492 0 16.2818C0.494941 16.3198 0.970781 16.3325 1.48477 16.3325C4.35908 16.3325 7.00506 15.6853 9.11801 14.5813C6.41496 14.5432 4.14973 13.363 3.36926 11.7386C3.75 11.7766 4.13068 11.802 4.53047 11.802C5.08248 11.802 5.63455 11.7513 6.14848 11.6625C3.33123 11.2817 1.21822 9.63199 1.21822 7.63961V7.58887C2.03672 7.89344 2.98857 8.08379 3.99738 8.10914C2.34129 7.37309 1.25631 6.11676 1.25631 4.69543C1.25631 3.93402 1.56082 3.23606 2.09385 2.62692C5.12051 5.11422 9.67002 6.73856 14.7715 6.91625C14.6763 6.61168 14.6192 6.29445 14.6192 5.97719C14.6192 3.71828 17.3603 1.8782 20.7677 1.8782C22.538 1.8782 24.1369 2.37313 25.2601 3.17262C26.6496 2.99496 27.9821 2.65231 29.1623 2.18277C28.7054 3.13457 27.7346 3.93406 26.4593 4.44164C27.6966 4.35285 28.8959 4.12438 29.9999 3.80715C29.1625 4.6193 28.1154 5.34262 26.9162 5.92641V5.92641Z" fill="#434343" fill-opacity="0.6"/>
                                </svg>
                            </div>
                            <div class=" border w-11 h-11 p-2 rounded-full">
                                <svg width="30" height="20" viewBox="0 0 128 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M116 14.625C122.625 14.625 128 19.5358 128 25.5938C128 29.0443 126.225 32.2893 123.2 34.3687L68.8 71.6625C65.95 73.6049 62.05 73.6049 59.2 71.6625L4.8 34.3687C1.77825 32.2893 0 29.0443 0 25.5938C0 19.5358 5.3725 14.625 12 14.625H116ZM54.4 77.5125C60.1 81.4201 67.9 81.4201 73.6 77.5125L128 40.2188V87.75C128 95.8166 120.825 102.375 112 102.375H16C7.1625 102.375 0 95.8166 0 87.75V40.2188L54.4 77.5125Z" fill="#434343" fill-opacity="0.6"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border rounded-xl border-gray-300 py-4 px-6 mt-10 pb-10">
                    <div class="text-gray-600 text-2xl mb-4">
                        <p class="border-b-2 w-1/12">Comment</p>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Your opinion" class="border border-gray-300 rounded-xl px-6 py-2 w-full">
                        <div class="grid grid-cols-12">
                            <div class="col-span-11"></div>
                            <div>
                                <div class=" absolute -mt-8 md:ml-14">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.828 14.828C14.0779 15.5779 13.0607 15.9991 12 15.9991C10.9393 15.9991 9.92211 15.5779 9.172 14.828H14.828ZM9 10H9.01H9ZM15 10H15.01H15ZM21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z" stroke="#9A9494" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-dashed border-b-2 my-4"></div>
                    <div class="pl-4 ">
                        <div class="flex w-full">
                            <p class="border rounded-full bg-gray-300 float-left w-10 h-10 px-3 pt-2 text-xl font-bold text-gray-600 mr-2">T</p>
                            <div class="pt-2">
                                <p class="font-bold text-lg text-gray-600 float-left pr-4">Tony</p>
                                <p class="text-gray-600 pt-1">Clues from a propaganda photo reveal details about North Korea’s </p>
                            </div>
                        </div>
                        <div class="mt-4 ml-10 text-gray-600 flex">
                            <div class="">
                                <svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="31" height="28" fill="url(#pattern0)"/>
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_37_238" transform="scale(0.0322581 0.0357143)"/>
                                        </pattern>
                                        <image id="image0_37_238" width="31" height="28" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAcCAYAAACZOmSXAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAEvSURBVEiJ7datkoMwFIbhl50VqcRGFolFEoms5RpySc0tIJFwDUhk44psZGRWtdPdgZ2ywNbwSeDkyd+cIQohBN6Uj3fBO75KLpcLzrlZNZ9rwcYYAMqyJMuyl+pWWbm1FoA8z6mq6uUdWIx777HWcjweKYoCgNvttj3uvccYw/V6RSnFMAyz6med+X1wKSXDMGCMIYSA1hopJXVdAxBF0eMohBBIKZfj98G11tR1jRACrTVxHAPQ9z0A5/P5W93pdEIptQz/mTiOH7D3nrIsRyfc9/36+HMOhwNJkow+n8qmHc45h7WWNE3/H2+aBiHEZNPZDHfO0XUdSqnJrd8Mv686z/PJbxZdOOccbduOvuu6jqIofr1wf8azLKOqqkn8ud1OJdp/o3Z8x3d8y3wBwgh4NiplcYEAAAAASUVORK5CYII="/>
                                    </defs>
                                </svg>
                            </div>
                            <p class="">15</p>
                            <a class=" mx-10">Reply</a>
                            <a>Share</a>
                        </div>
                    </div>
                    <div class="pl-4 ">
                        <div class="flex w-full">
                            <p class="border rounded-full bg-gray-300 float-left w-10 h-10 px-3 pt-2 text-xl font-bold text-gray-600 mr-2">T</p>
                            <div class="pt-2">
                                <p class="font-bold text-lg text-gray-600 float-left pr-4">Tony</p>
                                <p class="text-gray-600 pt-1">Clues from a propaganda photo reveal details about North Korea’s </p>
                            </div>
                        </div>
                        <div class="mt-4 ml-10 text-gray-600 flex">
                            <div class="">
                                <svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="31" height="28" fill="url(#pattern0)"/>
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_37_238" transform="scale(0.0322581 0.0357143)"/>
                                        </pattern>
                                        <image id="image0_37_238" width="31" height="28" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAcCAYAAACZOmSXAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAEvSURBVEiJ7datkoMwFIbhl50VqcRGFolFEoms5RpySc0tIJFwDUhk44psZGRWtdPdgZ2ywNbwSeDkyd+cIQohBN6Uj3fBO75KLpcLzrlZNZ9rwcYYAMqyJMuyl+pWWbm1FoA8z6mq6uUdWIx777HWcjweKYoCgNvttj3uvccYw/V6RSnFMAyz6med+X1wKSXDMGCMIYSA1hopJXVdAxBF0eMohBBIKZfj98G11tR1jRACrTVxHAPQ9z0A5/P5W93pdEIptQz/mTiOH7D3nrIsRyfc9/36+HMOhwNJkow+n8qmHc45h7WWNE3/H2+aBiHEZNPZDHfO0XUdSqnJrd8Mv686z/PJbxZdOOccbduOvuu6jqIofr1wf8azLKOqqkn8ud1OJdp/o3Z8x3d8y3wBwgh4NiplcYEAAAAASUVORK5CYII="/>
                                    </defs>
                                </svg>
                            </div>
                            <p class="">15</p>
                            <a class=" mx-10">Reply</a>
                            <a>Share</a>
                        </div>
                        <div class="flex pl-10 mt-2">
                            <div>
                                <img src="/img/img_21.png" class="w-6 h-5">
                            </div>
                            <p class="ml-2 text-gray-600">
                                2 answer
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-4 md:col-span-1">
            <div class="hidden md:block">
                <div class="font-bold text-gray-600 border-gray-300 text-center bg-gray-300 w-3/12 py-2">CATEGORY</div>
                <div class="border border-gray-300 mt-8 px-8 py-6 rounded-xl overflow-y-auto h-80">
                    @foreach($listA as $ls)
                        @if($ls != $name)
                            <div class="border-b-2 border-dashed mb-4 pb-2 pt-4 text-xl">
                                <a class="text-black cursor-pointer hover:text-blue-700" href="/list-news/{{$ls}}">{{$ls}}</a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="grid grid-cols-3 mt-16">
                    <input type="email" placeholder="Your keys..."
                           class="font-roboto col-span-2 border-blue-500 border-b-2 text-xl">
                    <button class="text-white bg-blue-700 px-2 py-2 font-bold text-2xl">Search</button>
                </div>
            </div>

            <div class="md:mt-10">
                <div class="font-bold text-gray-600 border-gray-300 text-center bg-gray-300 w-3/12 py-2 mb-6">NEWS</div>
                @php
                    $tittleNews = "Isro launches 104 satellites in a single mission to create world record"
                @endphp

                @for($i =13; $i <17; $i++)
                    <div class="relative pb-4">
                        <img src="/img/img_{{ $i }}.png" class="w-full rounded-xl">
                        <div
                            class="absolute -mt-32 text-white ml-2 md:w-5/6 md:ml-6">
                            <div class="">
                                <div class="">
                                    <div class="font-bold text-xl">
                                        <a href="/list-news/{{$name}}/{{$tittleNews}}">{{$tittleNews}}</a>
                                    </div>
                                    <p>2:30 | By Telegraph</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="mt-6">
                <div CLASS="font-bold text-gray-600 border-gray-300 text-center bg-gray-300 w-4/12 py-2 text-lg md:text-lg">VIEW MORE</div>
                <div class="font-bold md:pb-6 pt-2 text-xl md:text-2xl text-gray-700 font-['Merriweather']">
                    An Alarmed Base Prods Democrats Into an All-Out War
                </div>
                <div class="font-roboto md:text-lg">
                    After the election, Democrats debated whether to confront Mr. Trump or seek compromise, but riled-up
                    liberals have pushed party leaders into a fight.
                </div>
                <div class="mt-4 border-dashed border-b-2 md:mt-10 mb-4 md:mb-0">

                </div>
                <div class="font-bold md:py-6 text-xl md:text-2xl text-gray-700 font-['Merriweather']">
                    Transgender Student on the Front Lines of the Rights Battle
                </div>
                <div class="mb-6 md:mb-0 font-roboto md:text-lg">
                    Gavin Grimm, 17, whose initials are on a case heading to the Supreme Court, has become the new face
                    of the transgender rights movement.
                </div>
            </div>
        </div>
    </div>

    <div class="gap-4 pb-4 flex overflow-x-auto border-b-2 my-10">
        @php
            $tittle = "Women Do Like to Compete Against Themselves"
        @endphp

        @for( $i =2; $i<6; $i++)
            <div class=" flex-shrink-0 border border-gray-300 rounded-xl p-4 md:w-1/4 w-full">
                <img src="/img/img_{{ $i }}.png" class="rounded-xl w-full h-56">
                <div class="bg-white font-bold ml-6 text-gray-500 text-xl w-5/6 font-roboto mt-6 ">
                    <a href="/list-news/{{$name}}/{{$tittle}}">{{ $tittle }}</a>
                </div>
                <div class="mt-4 md:mt-6 text-gray-400 grid grid-cols-2 md:grid-cols-3">
                    <div class="col-span-1 flex">
                        <div class=" md:mt-1 mr-2">
                            <svg width="20" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 6V9L11.25 11.25L9 6ZM15.75 9C15.75 9.88642 15.5754 10.7642 15.2362 11.5831C14.897 12.4021 14.3998 13.1462 13.773 13.773C13.1462 14.3998 12.4021 14.897 11.5831 15.2362C10.7642 15.5754 9.88642 15.75 9 15.75C8.11358 15.75 7.23583 15.5754 6.41689 15.2362C5.59794 14.897 4.85382 14.3998 4.22703 13.773C3.60023 13.1462 3.10303 12.4021 2.76381 11.5831C2.42459 10.7642 2.25 9.88642 2.25 9C2.25 7.20979 2.96116 5.4929 4.22703 4.22703C5.4929 2.96116 7.20979 2.25 9 2.25C10.7902 2.25 12.5071 2.96116 13.773 4.22703C15.0388 5.4929 15.75 7.20979 15.75 9Z" stroke="#434343" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-sm">25 thg 7, 2022</p>
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="col-span-1 grid grid-cols-4">
                        <div class="flex">
                            <div class="mr-2">
                                <svg width="25" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 10C12.5 10.663 12.2366 11.2989 11.7678 11.7678C11.2989 12.2366 10.663 12.5 10 12.5C9.33696 12.5 8.70107 12.2366 8.23223 11.7678C7.76339 11.2989 7.5 10.663 7.5 10C7.5 9.33696 7.76339 8.70107 8.23223 8.23223C8.70107 7.76339 9.33696 7.5 10 7.5C10.663 7.5 11.2989 7.76339 11.7678 8.23223C12.2366 8.70107 12.5 9.33696 12.5 10V10Z" stroke="#434343" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.04833 10C3.11 6.61919 6.26917 4.16669 10 4.16669C13.7317 4.16669 16.89 6.61919 17.9517 10C16.89 13.3809 13.7317 15.8334 10 15.8334C6.26917 15.8334 3.11 13.3809 2.04833 10V10Z" stroke="#434343" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="text-sm">22</p>
                        </div>
                        <div></div>
                        <div class="flex">
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="text-sm">22</p>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

@endsection
