@php
    $listA = array("World", "Politics", "Business", "Opinion", "Tech", "Science", "Health", "Sports", "Entertainment", "Travel", "More");
@endphp

<div class="md:mx-16 mt-10">
    <div class="-mt-16 text-4xl font-[Bitter] font-bold md:text-8xl font-bold text-center md:mt-10 md:border-b-2 md:border-solid md:pb-10">
        The News
    </div>

    <div class="hidden md:block md:grid md:grid-cols-5 my-4 border-b-2 border-solid pb-4">
        <div class="col-span-1"></div>
        <div class="col-span-3">
            <div class="font-[Roboto] font-medium text-xl text-center">
                <ul class="flex flex-wrap -mb-px">
                    @for ($i = 0; $i <= count($listA)-1; $i++)
                        <li class="">
                            <a href="/list-news/{{ $listA[$i] }}" class="font-roboto inline-block p-2 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">{{ $listA[$i] }}</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex float-right">
                <img src="/img/img.png">
                <p class="text-blue-500 pl-4 font-bold">E-PAPER</p>
            </div>
        </div>
    </div>
</div>
