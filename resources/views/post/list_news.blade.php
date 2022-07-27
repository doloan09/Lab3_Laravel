@extends('layout.master')

@section('title')
    {{$name}}
@endsection

@section('content')

    <div class="md:mx-16 mt-10 mx-4 border-b-2 font-roboto">
    <div class="my-10 flex">
        <div class=" border-black border-l-4 pl-4 cursor-pointer">
            <a href="/home">Home ></a>
        </div>
        <div class="text-blue-700 cursor-pointer px-4"> {{$name}}</div>
    </div>

    <div class="grid grid-cols-4 gap-6 relative">
        <div class="col-span-4 md:col-span-3">
            <div
                class="bg-gray-300 text-black font-bold text-left px-4 py-2 text-xl md:text-2xl">{{ strtoupper($name)}}
            </div>
            <div class="grid grid-cols-3 md:grid-cols-6 my-6 gap-4">
                <div class="hidden md:block col-span-3"></div>

{{--                <div class="w-5/6 md:w-auto bg-white dark:bg-gray-900">--}}
{{--                    <div id="exampleWrapper" class="dark:bg-gray-800">--}}
{{--                        <div class="relative">--}}
{{--                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">--}}
{{--                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>--}}
{{--                            </div>--}}
{{--                            <input datepicker="" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <input type="date" class="border py-2.5 md:px-4 px-1 border-gray-300 rounded-lg">
                <select class="bg-white px-2 py-2 md:px-8 md:py-3 rounded-lg border md:ml-4">
                    <option value="">Trends</option>
                    <option value="New">New</option>
                    <option value="View more">View more</option>
                </select>
                <select class="bg-white px-2 py-2 md:px-6 md:py-3 rounded-lg border">
                    <option value="">Category</option>
                    <option value="Sport">Sport</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Travel">Travel</option>
                </select>

            </div>
            <div class="border border-gray-300 rounded-xl pb-6 md:pb-10 mt-6 md:mt-12">
                @php
                    $content = "Hate Crime Is Feared in Shooting of 2 Indians in Kansas";
                 @endphp

                @for($i = 3; $i<9; $i++)
                    <div class="md:grid md:grid-cols-3 md:gap-10 py-6 md:py-10 border-b-2 mx-2 md:mx-10">
                        <div class="col-span-1">
                            <img src="/img/img_{{$i}}.png" class="mb-4 md:mb-0 w-full h-52">
                        </div>
                        <div class="col-span-2 font-roboto">
                            <a href="/list-news/{{$name}}/{{$content}}"
                               class="font-medium text-lg md:text-2xl text-gray-700">{{$content}}</a>
                            <p class="hidden md:block mt-2 text-xl">India’s government expressed shock after one citizen
                                was killed and another wounded in a bar in suburban Kansas. Another wounded in a bar in
                                suburban Kansas...</p>
                            <div class="mt-4 md:mt-20">
                                <div class="float-left mt-1 mr-2">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 6V9L11.25 11.25L9 6ZM15.75 9C15.75 9.88642 15.5754 10.7642 15.2362 11.5831C14.897 12.4021 14.3998 13.1462 13.773 13.773C13.1462 14.3998 12.4021 14.897 11.5831 15.2362C10.7642 15.5754 9.88642 15.75 9 15.75C8.11358 15.75 7.23583 15.5754 6.41689 15.2362C5.59794 14.897 4.85382 14.3998 4.22703 13.773C3.60023 13.1462 3.10303 12.4021 2.76381 11.5831C2.42459 10.7642 2.25 9.88642 2.25 9C2.25 7.20979 2.96116 5.4929 4.22703 4.22703C5.4929 2.96116 7.20979 2.25 9 2.25C10.7902 2.25 12.5071 2.96116 13.773 4.22703C15.0388 5.4929 15.75 7.20979 15.75 9Z"
                                            stroke="#434343" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p class="text-sm md:text-lg">25 thg 7, 2022</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

{{--        Pagination    --}}
            <div class="my-10 md:grid md:grid-cols-3">
                <div class="hidden md:block"></div>
                <nav aria-label="Page navigation example" class="ml-10 md:ml-0">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#"
                               class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class=" bg-gray-300 mx-3 py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-400 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                               class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#"
                               class="z-10 py-2 px-3 mx-3 leading-tight text-gray-500 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                               class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 px-3 mx-2 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="hidden md:block"></div>
            </div>
        </div>
        @include('post.category')
    </div>
</div>

@endsection
