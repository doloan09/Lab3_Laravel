@extends('layout.master')

@section('title')
    {{$Category->name}}
@endsection

@section('content')

    <div class="md:mx-16 mt-10 mx-4 border-b-2 font-roboto">
    <div class="my-10 flex">
        <div class=" border-black border-l-4 pl-4 cursor-pointer">
            <a href="{{ route('home') }}">Home ></a>
        </div>
        <div class="text-blue-700 cursor-pointer px-4"> {{$Category->name}}</div>
    </div>

    <div class="grid grid-cols-4 gap-6 relative">
        <div class="col-span-4 md:col-span-3">
            <div
                class="bg-gray-300 text-black font-bold text-left px-4 py-2 text-xl md:text-2xl">{{ strtoupper($Category->name)}}
            </div>
            <div class="grid grid-cols-3 md:grid-cols-6 my-6 gap-4">
                <div class="hidden md:block col-span-3"></div>
                <input type="date" class="border py-2.5 md:px-4 px-1 border-gray-300 rounded-lg">
                <select class="bg-white px-2 py-2 md:px-8 md:py-3 rounded-lg border md:ml-4">
                    <option value="">Trends</option>
                    <option value="New">New</option>
                    <option value="View more">View more</option>
                </select>
                <select class="bg-white px-2 py-2 md:px-6 md:py-3 rounded-lg border" id="selectBox" onchange="changeFunc();">
                    <option value="">Category</option>
                    @foreach($listCategory as $ls)
                        @if($ls->name != $slug)
                            <option value="{{$ls->slug}}">{{ $ls->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            @if(count($listArticles) == 0)
                <div class="text-center font-bold text-2xl mt-24 text-red-600">Danh sách bài viết trống!</div>
            @else
                <div class="border border-gray-300 rounded-xl pb-6 md:pb-10 mt-6 md:mt-12">
                    @foreach($listArticles as $lst)
                        <div class="md:grid md:grid-cols-3 md:gap-10 py-6 md:py-10 border-b-2 mx-2 md:mx-10">
                            <div class="col-span-1">
                                <img src="{{ $lst->image }}" class="mb-4 md:mb-0 w-full h-52">
                            </div>
                            <div class="col-span-2 font-roboto">
                                <a href="{{ route('articles.show', $lst->slug) }}"
                                   class="font-bold text-lg md:text-2xl text-gray-700">{{$lst->tittle}}</a>
                                <p class="hidden md:block mt-2 text-xl">{!! $lst->description !!}</p>
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
                                    <p class="text-sm md:text-lg">{{ $lst->date }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--        Pagination    --}}
                <div class="mt-10 my-10">
                    {{ $listArticles->links('pagination::tailwind') }}
                </div>
            @endif

        </div>
        @include('post.category')
    </div>
</div>

@endsection

@push('scripts')
    <script type="text/javascript">
        function changeFunc() {
            var selectBox = document.getElementById("selectBox");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            window.location.href = "/categories/" + selectedValue;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script>
        removeHidden();
        function removeHidden(){
            $('span.location-stamp').addClass("text-gray-500");
            $('span.location-stamp').addClass("mr-4");
        }
    </script>
@endpush


