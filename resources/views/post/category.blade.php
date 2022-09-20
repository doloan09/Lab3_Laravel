<div class="hidden md:block col-span-1 font-roboto">
    <div CLASS="font-bold text-gray-600 border-gray-300 text-center bg-gray-300 w-3/12 py-2">CATEGORY</div>
    <div class="border border-gray-300 mt-8 px-8 py-6 rounded-xl overflow-y-auto h-80">
        @foreach($listCategory as $ls)
            @if($ls->name != $Cate->name)
                <div class="border-b-2 border-dashed mb-4 pb-2 pt-4 text-xl">
                    <a class="text-black cursor-pointer hover:text-blue-700" href="/categories/{{ $ls->slug }}">{{$ls->name}}</a>
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
