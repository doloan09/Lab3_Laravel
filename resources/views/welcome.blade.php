<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script type="text/javascript">
        function changeAtiveTab(event,tabID){
            let element = event.target;
            while(element.nodeName !== "A"){
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for(let i = 0 ; i < aElements.length; i++){
                aElements[i].classList.remove("text-blue-600");
                aElements[i].classList.add("text-black");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-black");
            element.classList.add("text-blue-600");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>

    <?php
        $listA = array("World", "Politics", "Business", "Opinion", "Tech", "Science", "Health", "Sports", "Entertainment", "Travel", "More");
        $listVides = array("News", "Entertainment", "Celebs", "Movie", "Lifestyle", "Sports", "Tech", "Business", "Auto");
        $listEnterTaiment = array(
            "Kangana sad that her ‘Rangoon’ scenes were cut by censorboard",
            "Kajol-Ajay celebrate 18th wedding anniversary in Paris",
            "Shahid wishes he was offered this Aamir Khan’s film last year!",
            "Lipstick Under My Burkha: CBFC defends its move of banning the film",
            "Varun-Alia’s new song ‘Aashiq Surrender Hua’ is out on YouTube",
            "‘Jolly LLB 2’ box-office collection week 2",
            "Casting Ouch! The open dirty secret of showbiz culture in Bollywood",
            "Student arrested for the murder of model turned teacher",
            "Shahid wishes he was offered this Aamir Khan’s film last year!"
        );

        $lstTopStore = array(
            "PM unveils Shiva statue in Coimbatore on Mahashivratri",
            "PM Modi: Kanpur train accident was a conspiracy",
            "‘Sena, BJP have no option but to join hands again’",
            "Thousands bid adieu to martyred jawan in Kashmir",
            "Jayalalithaa’s niece Deepa floats political outfit",
            "‘China made mistake of ignoring India’s talent’",
            "Jayalalithaa’s niece Deepa floats political outfit"
        );
    ?>

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
                    <p class="bg-gray-200 px-4 py-2 text-xl text-center font-light hidden md:block">Log in</p>
                </div>
            </div>
        </div>
        <div class="-mt-8 text-4xl font-[Bitter] font-bold md:text-8xl font-bold text-center md:mt-10 md:border-b-2 md:border-solid md:pb-10">
            The News
        </div>

        <div class="hidden md:block md:grid md:grid-cols-5 my-4 border-b-2 border-solid pb-4">
            <div class="col-span-1"></div>
            <div class="col-span-3">
                <div class="font-[Roboto] font-medium text-xl text-center">
                    <ul class="flex flex-wrap -mb-px">
                        @for ($i = 0; $i <= count($listA)-1; $i++)
                            <li class="">
                                <a href="" class="font-roboto inline-block p-2 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">{{ $listA[$i] }}</a>
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
        <div class="md:grid md:grid-cols-4 md:gap-4 mt-10">
             <div class="col-span-3 md:border-b-2 md:border-solid pb-4">
                <div class="md:grid md:grid-cols-3 md:gap-10">
                    <div class="col-span-2">
                            <div class="relative pb-2 md:pb-10">
                                <img src="/img/img_1.png">
                                <div class="font-roboto font-bold text-lg ml-4 md:ml-0 md:text-4xl bg-white absolute -mt-14 md:-mt-20 w-5/6 px-6 pt-2">
                                    What One Photo Tells Us About North Korea's Nuclear Program
                                </div>
                            </div>
                            <div class="font-roboto hidden md:block md:pl-4 text-xl">
                                Clues from a propaganda photo reveal details about North Korea’s expanding weapons programs and internal politics.
                            </div>
                    </div>
                    <div class="col-span-1 mx-4 md:mx-0">
                        <div class="flex flex-col font-roboto">
                            <div class="grid grid-cols-5">
                                <p class="col-span-4 md:col-span-5 bg-[#FBFF22] py-1 md:p-2 w-2/5 md:w-2/5 text-sm font-bold md:text-lg text-gray-600 mt-4 md:mt-0 text-center">TOP STORIES</p>
                                <div class="md:hidden text-blue-600 float-right mt-4 text-sm">View all</div>
                            </div>
                            <div class="hidden md:block">
                                @foreach($lstTopStore as $ls)
                                    <div class="my-2 font-roboto border-dashed md:border-solid border-b-2 md:pb-2 ml-2 md:ml-0 md:text-xl truncate md:text-clip md:whitespace-pre-wrap">{{ $ls }}</div>
                                @endforeach
                            </div>
                            <div class="md:hidden">
                                @for($i = 0; $i<4; $i++)
                                    <div class="my-2 font-roboto border-dashed md:border-solid border-b-2 md:pb-2 ml-2 md:ml-0 md:text-xl truncate md:text-clip md:whitespace-pre-wrap">{{ $lstTopStore[$i] }}</div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <div class="col-span-1 md:px-6 mx-4 md:mx-0">
                <div class="flex flex-col bg-blue-50">
                    <div>
                        <p class="bg-[#FBFF22] font-roboto py-1 md:p-2 w-2/6 md:w-2/5 text-sm font-bold md:text-lg text-gray-600 md:mt-0 text-center">QUICK BITES</p>
                    </div>
                    <div class="font-bold p-6 text-xl md:text-2xl md:text-3xl text-gray-700 font-['Merriweather']">
                        Stocks Sell Off, Gold Rises
                        Ahead of Trump Speech:
                        Markets Wrap
                    </div>
                    <div class="px-6 font-roboto md:text-xl">
                        Global stocks retreated, erasing gains for the week as a glum set of
                        European corporate earnings compounded investor nervousness before a major speech from U.S.
                        President Donald Trump. Gold extended its rally as the dollar edged lower.
                    </div>
                    <div class="hidden md:block font-bold my-4 px-6 text-blue-700 text-right">
                        Next &gt;
                    </div>
                    <div class="md:hidden font-bold my-4 px-6 text-blue-700 text-right">
                        &gt;
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="text-blue-500 my-6 text-2xl font-bold font-['Merriweather']">
                        Get the Quick Bites delivered to
                        your inbox daily
                    </div>
                    <div class="grid grid-cols-3 mt-4">
                        <input type="email" placeholder="Enter your email" class="font-[Roboto] col-span-2 border-blue-500 border-b-2 text-xl">
                        <button class="text-white bg-blue-700 px-2 py-2 font-bold text-2xl">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:grid md:grid-cols-4 md:gap-4 mb-4 mx-4 md:mx-0">
            <div class="col-span-3 md:border-b-2 md:border-solid pb-10">
                <div class="flex md:grid md:grid-cols-12 md:py-4 border-b-2 my-4 md:border-b-0 md:my-0 font-roboto">
                    <div class="bg-gray-100 md:bg-gray-300 col-span-1 px-1 py-0.5 md:p-2 font-medium text-gray-700 text-center">FEATURE</div>
                    <div class="text-gray-500 bg-gray-100 col-span-10 pt-2 px-6 hidden md:block md:text-lg">
                        Mahashivratri symbolizes a union of divinity with a purpose of overcoming darkness and injustice.
                    </div>
                    <div class="hidden md:block col-span-1 pt-2 text-blue-400 font-bold text-right md:text-lg">View all</div>
                </div>
                <div class="gap-4 pb-4 flex overflow-x-auto ">
                    <div class=" flex-shrink-0 relative">
                        <img src="/img/img_2.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6 font-['Merriweather']">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class=" flex-shrink-0 relative">
                        <img src="/img/img_3.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6 font-['Merriweather']">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="flex-shrink-0 relative">
                        <img src="/img/img_4.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6 font-['Merriweather']">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="flex-shrink-0 relative">
                        <img src="/img/img_2.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6 font-['Merriweather']">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="flex-shrink-0 relative">
                        <img src="/img/img_3.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6 font-['Merriweather']">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="flex-shrink-0 relative">
                        <img src="/img/img_4.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6 font-['Merriweather']">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-1 relative hidden md:block">
                <img src="/img/img_5.png" class="mt-10 rounded-2xl">
                <div class="absolute -mt-56 px-6">
                    <div class="flex">
                        <div class="w-3 h-3 bg-red-500 rounded-full mt-2"></div>
                        <p class="text-xl font-bold text-red-500 pb-12 ml-2">Live</p>
                    </div>
                    <div class="border-2 border-solid border-gray-400 rounded-full w-16 h-16 mb-4">
                        <img src="img/img_12.png" class="p-4">
                    </div>
                    <p class="font-bold text-white text-2xl w-4/6">Watch Modi live from G8 Summit</p>
                </div>
            </div>
        </div>
        <div class="md:grid md:grid-cols-6 md:gap-4 mb-4 md:mb-10 mx-4 md:mx-0">
            <div class="col-span-1 md:border-r-2 md:pr-4 md:border-gray-200">
                <div class="flex flex-col">
                    <div class="border-b-2 md:border-b-0">
                        <p class="bg-gray-100 font-medium md:p-2 md:text-lg w-1/3 md:w-3/5 text-gray-700 text-center font-roboto">WORLD NEWS</p>
                    </div>
                    <div class="font-bold md:pb-6 pt-2 text-xl md:text-2xl text-gray-700 font-['Merriweather']">
                        An Alarmed Base Prods Democrats Into an All-Out War
                    </div>
                    <div class="font-roboto md:text-lg">
                        After the election, Democrats debated whether to confront Mr. Trump or seek compromise, but riled-up liberals have pushed party leaders into a fight.
                    </div>
                    <div class="mt-4 border-dashed border-b-2 md:w-2/6 md:mt-10 mb-4 md:mb-0">

                    </div>
                    <div class="font-bold md:py-6 text-xl md:text-2xl text-gray-700 font-['Merriweather']">
                        Transgender Student on the Front Lines of the Rights Battle
                    </div>
                    <div class="mb-6 md:mb-0 font-roboto md:text-lg">
                        Gavin Grimm, 17, whose initials are on a case heading to the Supreme Court, has become the new face of the transgender rights movement.
                    </div>
                    <div class="hidden md:block border-dashed border-b-2 md:w-2/6 mt-4">

                    </div>
                </div>
            </div>
            <div class="border-b-2 md:hidden"></div>
            <div class="col-span-4 md:px-2 md:border-r-2 md:pr-4 md:border-gray-200 font-['Roboto']">
                <div class="md:grid md:grid-cols-3 md:gap-4">
                    <div class="col-span-2 md:border-r-2 md:pr-4 md:border-gray-200">
                        <div class="border-dashed border-b-2 pb-4">
                            <div class="text-xl font-bold text-gray-700 pb-2 mt-4 md:mt-0">
                                Hate Crime Is Feared in Shooting of 2 Indians in Kansas
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-2 pr-6 md:text-lg font-roboto">
                                    India’s government expressed shock after one citizen was killed and another wounded in a bar in suburban Kansas. Another wounded in a bar in suburban Kansas.
                                </div>
                                <div>
                                    <img src="/img/img_5.png">
                                </div>
                            </div>
                        </div>
                        <div class="hidden border-dashed border-b-2 pb-4 pt-4  md:block ">
                            <div class="font-bold text-gray-700 pb-2 text-xl">
                                Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                            </div>
                            <div class="md:text-lg font-roboto">
                                The suit, brought by the autonomous car business Waymo, accuses Uber and a star engineer, Anthony Levandowski, of planning to steal trade secrets.
                            </div>
                        </div>
                        <div class="border-dashed border-b-2 pb-4 pt-4">
                            <div class="text-xl font-bold text-gray-700 pb-2">
                                Hate Crime Is Feared in Shooting of 2 Indians in Kansas
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-2 pr-6 md:text-lg font-roboto">
                                    India’s government expressed shock after one citizen was killed and another wounded in a bar in suburban Kansas. Another wounded in a bar in suburban Kansas.
                                </div>
                                <div>
                                    <img src="/img/img_6.png">
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block md:border-dashed md:border-b-0 border-b-2 pb-4 pt-4">
                            <div class="font-bold text-gray-700 pb-2 text-xl">
                                Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                            </div>
                            <div class=" md:text-lg font-roboto">
                                The suit, brought by the autonomous car business Waymo, accuses Uber and a star engineer, Anthony Levandowski, of planning to steal trade secrets.
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col">
                            <div>
                                <p class="mt-4 md:mt-0 bg-[#FBFF22] pt-0.5 text-sm font-roboto font-bold md:p-2 w-2/5 md:w-1/2 md:text-lg text-gray-700 text-center">ENTERTAINMENT</p>
                            </div>
                            <div class="hidden md:block">
                                @for($i=0; $i< count($listEnterTaiment) -1; $i++)
                                    @if($i == count($listEnterTaiment) -1)
                                        <div class="my-2 pb-2 md:text-lg font-roboto">{{ $listEnterTaiment[$i]}}</div>
                                    @else
                                        <div class="my-2 border-dashed border-b-2 pb-2 md:text-lg font-roboto">{{ $listEnterTaiment[$i]}}</div>
                                    @endif
                                @endfor
                            </div>
                            <div class="md:hidden">
                                @for($i=0; $i<5; $i++)
                                    <div class="my-2 border-dashed border-b-2 pb-2 md:text-lg font-roboto">{{ $listEnterTaiment[$i] }}</div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 font-['Roboto']">
                <div class="flex flex-col md:border-b-2 md:border-gray-200">
                    <div class="border-b-2 md:border-b-0">
                        <p class="bg-gray-100 font-medium md:p-2 md:text-lg w-1/3 md:w-3/5 text-gray-800 text-center mt-4 md:mt-0 font-roboto">SPORTS NEWS</p>
                    </div>
                    <div class="font-bold pb-2 md:pb-6 pt-2 text-xl md:text-2xl text-gray-700">
                        COA wants all BCCI bodies to produce compliance report
                    </div>
                    <div class="md:text-lg font-roboto">
                        After the election, Democrats debated whether to confront Mr. Trump or seek compromise, but riled-up liberals have pushed party leaders into a fight.
                    </div>
                    <div class="md:hidden border-dashed border-b-2 mt-4"></div>
                    <div class="grid grid-cols-2 md:inline-block">
                        <img src="/img/img_7.png" class="mt-4 md:mt-10">
                        <div class="font-bold py-6 text-xl md:text-2xl text-gray-700 ml-4 md:ml-0 md:my-0">
                            Series win in Australia hugely satisfying: Upul Tharanga
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:grid md:grid-cols-6 md:gap-4 border-b-2 mb-4 md:mb-10 md:mx-0">
            <div class="col-span-5">
                <div class="font-['Roboto']">
                    <div class="hidden md:block md:grid md:grid-cols-6 bg-gray-300 py-2 ">
                        <div class="col-span-1 text-xl md:text-2xl pl-4 font-bold text-gray-700 font-['Merriweather']">Videos</div>
                        <div class="col-span-4"></div>
                        <div class="col-span-1 text-right md:text-xl text-blue-600 pr-2 font-bold font-roboto"> View all Videos</div>
                    </div>
                    <div class="md:grid md:grid-cols-3 md:gap-4 md:py-4 md:px-6 md:border-b-2 md:border-l-2 md:border-r-2 md:border-dashed">
                        <div class="col-span-2 md:border-r-2 md:pr-6">
                            <div class="hidden md:block md:text-lg py-2 pb-6 cursor-pointer">
                                <div class="flex flex-wrap" id="tabs-id">
                                    <div class="w-full">
                                        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row font-roboto">
                                            <li class="-mb-px last:mr-0 flex-auto text-center">
                                                <a class="block leading-normal text-blue-700" onclick="changeAtiveTab(event,'tab-Trending')">
                                                    <i class="fas fa-space-shuttle text-base mr-1"></i>  Trending
                                                </a>
                                            </li>

                                            @foreach($listVides as $ls)
                                                <li class="-mb-px last:mr-0 flex-auto text-center">
                                                    <a class="block leading-normal text-black" onclick="changeAtiveTab(event,'tab-{{ $ls }}')">
                                                        <i class="fas fa-space-shuttle text-base mr-1"></i>  {{ $ls }}
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full">
                                            <div class="px-4 py-5 flex-auto">
                                                <div class="tab-content tab-space">
                                                    <div class="block" id="tab-Trending">
                                                        <div class="relative">
                                                            <img src="/img/img_8.png" class="w-full">
                                                            <div class="absolute -mt-28 text-white ml-2 md:w-5/6 md:ml-10">
                                                                <div class="grid grid-cols-6 gap-4">
                                                                    <div class="col-span-1">
                                                                        <div class="border-2 border-solid rounded-full w-16 h-16 mt-4 border-gray-400">
                                                                            <img src="img/img_12.png" class="p-4">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-span-5">
                                                                        <p class="text-xl font-bold md:text-3xl">Isro launches 104 satellites in a single mission to create world record</p>
                                                                        <p>2:30 | By Telegraph</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php $index = 8 ?>

                                                    @foreach($listVides as $ls)
                                                        @if ($index == 11)
                                                            <?php $index = 8 ?>
                                                        @else
                                                            <?php $index +=1 ?>
                                                        @endif
                                                        <div class="hidden" id="tab-{{ $ls }}">
                                                            <div class="relative">
                                                                <img src="/img/img_{{ $index }}.png" class="w-full">
                                                                <div class="absolute -mt-28 text-white ml-2 md:w-5/6 md:ml-10">
                                                                    <div class="grid grid-cols-6 gap-4">
                                                                        <div class="col-span-1">
                                                                            <div class="border-2 border-solid rounded-full w-16 h-16 mt-4 border-gray-400">
                                                                                <img src="img/img_12.png" class="p-4">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-span-5">
                                                                            <p class="text-xl font-bold md:text-3xl">Isro launches 104 satellites in a single mission to create world record</p>
                                                                            <p>2:30 | By Telegraph</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block ">
                            <div class="relative">
                                <img src="/img/img_9.png">
                                <div class="absolute -mt-52 text-white w-5/6 ml-4">
                                    <div class="border-2 border-solid rounded-full w-10 h-10 mt-10 mb-20">
                                        <img src="img/img_12.png" class="p-2">
                                    </div>
                                    <p>2:30 | By Telegraph</p>
                                </div>
                            </div>
                            <div class="relative py-6">
                                <img src="/img/img_10.png">
                                <div class="absolute -mt-52 text-white w-5/6 ml-4">
                                    <div class="border-2 border-solid rounded-full w-10 h-10 mt-10 mb-10">
                                        <img src="img/img_12.png" class="p-2">
                                    </div>
                                    <p class="font-bold text-lg">Isro launches 104 satellites in a single mission to create world record</p>
                                    <p>2:30 | By Telegraph</p>
                                </div>
                            </div>
                            <div class="relative">
                                <img src="/img/img_11.png">
                                <div class="absolute -mt-52 text-white w-5/6 ml-4">
                                    <div class="border-2 border-solid rounded-full w-10 h-10 mt-10 mb-10">
                                        <img src="img/img_12.png" class="p-2">
                                    </div>
                                    <p class="font-bold text-lg">Isro launches 104 satellites in a single mission to create world record</p>
                                    <p>2:30 | By Telegraph</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative md:hidden">
                    <img src="/img/img_8.png" class="w-full">
                    <div class="absolute -mt-28 text-white ml-2 md:ml-10">
                        <div class="grid grid-cols-6 gap-4">
                            <div class="col-span-1">
                                <div class="border-2 border-solid rounded-full w-10 h-10 mt-2">
                                    <img src="img/img_12.png" class="p-2">
                                </div>
                            </div>
                            <div class="col-span-5">
                                <p class="text-lg font-bold">Isro launches 104 satellites in a single mission to create world record</p>
                                <p class="text-sm">2:30 | By Telegraph</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block md:grid md:grid-cols-5 md:gap-6 mt-6 mb-4 md:mb-16">
                    <div class="border-dashed border-b-2 md:border-0">
                        <img src="/img/img_13.png">
                        <p class="font-bold py-6 text-xl text-gray-700 font-['Merriweather']">The Intimate Lens of Ed van der Elsken</p>
                        <p class=" text-gray-600 text-lg font-roboto">Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <img src="/img/img_14.png">
                        <p class="font-bold py-6 text-xl text-gray-700 font-['Merriweather']">Gauging the Art Market’s Health</p>
                        <p class=" text-gray-600 text-lg font-roboto">Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.</p>
                    </div>
                    <div class="hidden md:block ">
                        <img src="/img/img_15.png">
                        <p class="font-bold py-6 text-xl text-gray-700 font-['Merriweather']">What happen when you skip breakfast</p>
                        <p class=" text-gray-600 text-lg font-roboto">The old saying, ‘Eat breakfast like a king, lunch like a prince and dinner like a pauper’ couldn’t ring truer. Beginning your day with a heavy breakfast.</p>
                    </div>
                    <div class="hidden md:block ">
                        <img src="/img/img_16.png">
                        <p class="font-bold py-6 text-xl text-gray-700 font-['Merriweather']">In London, the Rise of Old-Fashioned </p>
                        <p class=" text-gray-600 text-lg font-roboto">Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.</p>
                    </div>
                    <div class="hidden md:block ">
                        <img src="/img/img_17.png">
                        <p class="font-bold py-6 text-xl text-gray-700 font-['Merriweather']">6 myths about keeping an aquarium</p>
                        <p class=" text-gray-600 text-lg font-roboto">Keeping fish in aquariums is a hobby which is quite common. People are often very apprehensive about keeping fish and having an aquarium.</p>
                    </div>
                </div>

                <div class="md:hidden mx-4">
                    <div class="border-dashed md:border-solid border-b-2 pb-4">
                        <div class="font-bold text-gray-600 pb-2 mt-4 md:mt-0 text-xl font-['Merriweather']">
                            The Intimate Lens of Ed van der Elsken
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-2 pr-6 font-roboto">
                                Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.
                            </div>
                            <div>
                                <img src="/img/img_13.png">
                            </div>
                        </div>
                    </div>
                    <div class="pb-4">
                        <div class="font-bold text-gray-600 pb-2 mt-4 md:mt-0 text-xl font-['Merriweather']">
                            Gauging the Art Market’s Health
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-2 pr-6 font-roboto">
                                Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                            </div>
                            <div>
                                <img src="/img/img_14.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 hidden md:block font-['Roboto']">
                <div class="flex flex-col">
                    <div class="mb-6">
                        <p class="bg-[#FBFF22] font-bold p-2 w-3/5 text-lg text-gray-700 text-center font-roboto">MOST POPULAR</p>
                    </div>

                    @for ($i = 1; $i <= 10; $i++)
                        <div class="my-2text-lg text-gray-900 relative font-roboto">
                            <p class="text-8xl text-gray-100 font-bold">{{ $i }}</p>
                            <p class="absolute -mt-16 pl-8 text-lg">
                                PM unveils Shia status in Coimbatore on Mahashivratri
                            </p>
                        </div>
                        <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    @endfor

                </div>
            </div>
        </div>

        <div class="md:hidden flex text-gray-400 mb-4 text-center pl-6 border-b-2 pb-4">
            <div class="px-2 text-sm">Contact</div>
            <div class="px-2 text-sm">Work With Us</div>
            <div class="px-2 text-sm">Advertise</div>
            <div class="px-2 text-sm">Privacy</div>
        </div>

        <div class="md:grid md:grid-cols-6 mb-6">
            <div class="text-center col-span-1 font-bold text-gray-500 font-roboto">
                @ 2017 The Telegraph Company
            </div>
            <div class="hidden md:block col-span-5">
                <div class="flex font-roboto text-gray-700 text-xl">
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Contact Us</div>
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Work With Us</div>
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Advertise</div>
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Your Ad Choices</div>
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Privacy</div>
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Terms of Service</div>
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Terms of Sale</div>
                    <div class="border-r-2 border-gray-400 px-2 text-sm">Site Information</div>
                    <div class="border-r-2 border-gray-400 px-4 text-sm">Navigation</div>
                    <div class="border-r-2 border-gray-400 px-4 text-sm">Site Map</div>
                    <div class="border-r-2 border-gray-400 px-4 text-sm">HelpSite</div>
                    <div class="border-r-2 border-gray-400 px-4 text-sm">Feedback</div>
                    <div class="border-r-2 border-gray-400 px-4 text-sm">Subscriptions</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
