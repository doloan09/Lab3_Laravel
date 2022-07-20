<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:mx-16 mt-10 font-['Roboto']">
        <div class="mx-4 md:mx-0 grid grid-cols-3 gap-4 md:border-b-2 md:border-solid md:pb-2">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-1 space-y-2">
                    <div class="w-8 h-1 bg-gray-300"></div>
                    <div class="w-8 h-1 bg-gray-300"></div>
                    <div class="w-8 h-1 bg-gray-300"></div>
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
                            <svg aria-hidden="true" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
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
                <div class="grid grid-cols-12 gap-4 font-[Roboto] font-medium text-xl">
                    <div>World</div>
                    <div>Politics</div>
                    <div>Business</div>
                    <div>Opinion</div>
                    <div>Tech</div>
                    <div>Science</div>
                    <div>Health</div>
                    <div>Sports</div>
                    <div>Entertainment</div>
                    <div></div>
                    <div>Travel</div>
                    <div>More</div>
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
                            <div class="relative pb-10">
                                <img src="/img/img_1.png">
                                <div class="font-[PTSerif] font-bold text-lg ml-4 md:ml-0 md:text-3xl bg-white absolute -mt-14 w-5/6 px-6 pt-2">
                                    What One Photo Tells Us About North Korea's Nuclear Program
                                </div>
                            </div>
                            <div class="hidden md:block md:pl-4">
                                Clues from a propaganda photo reveal details about North Korea’s expanding weapons programs and internal politics.
                            </div>
                    </div>
                    <div class="col-span-1 mx-4 md:mx-0">
                        <div class="flex flex-col">
                            <div>
                                <p class="bg-[#FBFF22] font-medium py-1 md:p-2 w-2/6 md:w-2/6 md:text-lg text-gray-600 mt-4 md:mt-0 text-center">TOP STORIES</p>
                            </div>
                            <div class="my-2 md:my-4 border-dashed md:border-solid border-b-2 md:pb-2 ml-2 md:ml-0">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="mb-2 md:my-4 border-dashed md:border-solid border-b-2 md:pb-2 ml-2 md:ml-0">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="mb-2 md:my-4 border-dashed md:border-solid border-b-2 md:pb-2 ml-2 md:ml-0">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="mb-2 md:my-4 border-dashed md:border-solid border-b-2 md:pb-2 ml-2 md:ml-0">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="hidden md:block my-4 border-dashed md:border-solid border-b-2 pb-2 ml-2 md:ml-0">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="hidden md:block my-4 border-dashed md:border-solid border-b-2 pb-2 ml-2 md:ml-0">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="hidden md:block my-4 border-dashed md:border-solid border-b-2 pb-2 ml-2 md:ml-0">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                        </div>
                    </div>
                </div>
             </div>
            <div class="col-span-1 md:px-6 mx-4 md:mx-0">
                <div class="flex flex-col bg-blue-50">
                    <div>
                        <p class="bg-[#FBFF22] font-medium py-1 md:p-2 w-2/6 md:w-2/5 md:text-lg text-gray-600 md:mt-0 text-center">QUICK BITES</p>
                    </div>
                    <div class="font-bold p-6 text-2xl text-gray-600">
                        Stocks Sell Off, Gold Rises
                        Ahead of Trump Speech:
                        Markets Wrap
                    </div>
                    <div class="px-6">
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
                    <div class="text-blue-500 my-6 text-2xl font-bold">
                        Get the Quick Bites delivered to
                        your inbox daily
                    </div>
                    <div class="grid grid-cols-3 mt-4">
                        <input type="email" placeholder="Enter your email" class="col-span-2 border-blue-500 border-b-2 text-xl">
                        <button class="text-white bg-blue-700 px-2 py-2 font-bold text-2xl">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:grid md:grid-cols-4 md:gap-4 mb-4 mx-4 md:mx-0">
            <div class="col-span-3 md:border-b-2 md:border-solid pb-10">
                <div class="flex md:grid md:grid-cols-12 md:py-4 border-b-2 my-4 md:border-b-0 md:my-0">
                    <div class="bg-gray-100 md:bg-gray-300 col-span-1 p-1 md:p-2 font-medium text-gray-600 text-center">FEATURE</div>
                    <div class="text-gray-500 bg-gray-100 col-span-10 pt-2 px-6 hidden md:block">
                        Mahashivratri symbolizes a union of divinity with a purpose of overcoming darkness and injustice.
                    </div>
                    <div class="hidden md:block col-span-1 pt-2 text-blue-700 text-right">View all</div>
                </div>
                <div class="hidden md:block md:grid md:grid-cols-3 md:gap-6">
                    <div class="relative">
                        <img src="/img/img_2.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="relative">
                        <img src="/img/img_3.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="relative">
                        <img src="/img/img_4.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                </div>

                <div class="md:hidden relative gap-4 snap-x pb-4 flex overflow-scroll">
                    <div class="snap-end flex-shrink-0 relative">
                        <img src="/img/img_2.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="snap-end flex-shrink-0 relative">
                        <img src="/img/img_3.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                    <div class="snap-end flex-shrink-0 relative">
                        <img src="/img/img_4.png">
                        <p class="-mt-14 absolute bg-white font-bold ml-6 px-6 text-gray-500 text-xl w-5/6">Women Do Like to Compete
                            Against Themselves
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-1 relative hidden md:block">
                <img src="/img/img_5.png" class="mt-10 rounded-2xl">
                <div class="absolute -mt-56 px-6 w-4/6">
                    <p class="text-xl font-bold text-red-500 pb-12">o Live</p>
                    <img src="/img/img_12.png" class="w-2/12 p-1 border border-solid rounded-3xl">
                    <p class="font-bold text-white text-2xl">Watch Modi live from G8 Summit</p>
                </div>
            </div>
        </div>
        <div class="md:grid md:grid-cols-6 md:gap-4 mb-10 mx-4 md:mx-0">
            <div class="col-span-1 md:border-r-2 md:pr-4 md:border-gray-200">
                <div class="flex flex-col md:border-b-2 md:border-b-0">
                    <div class="border-b-2 md:border-b-0">
                        <p class="bg-gray-100 font-medium md:p-2 text-lg w-2/5 md:w-3/5 text-gray-500 text-center">WORLD NEWS</p>
                    </div>
                    <div class="font-bold pb-6 pt-2 text-xl text-gray-600">
                        An Alarmed Base Prods Democrats Into an All-Out War
                    </div>
                    <div class="">
                        After the election, Democrats debated whether to confront Mr. Trump or seek compromise, but riled-up liberals have pushed party leaders into a fight.
                    </div>
                    <div class="mt-4 border-dashed border-b-2 md:border-solid md:w-2/6 md:mt-10">

                    </div>
                    <div class="font-bold py-6 text-xl text-gray-600">
                        Transgender Student on the Front Lines of the Rights Battle
                    </div>
                    <div class="mb-6 md:mb-0">
                        Gavin Grimm, 17, whose initials are on a case heading to the Supreme Court, has become the new face of the transgender rights movement.
                    </div>
                </div>
            </div>
            <div class="col-span-4 md:px-2 md:border-r-2 md:pr-4 md:border-gray-200">
                <div class="md:grid md:grid-cols-3 md:gap-4">
                    <div class="col-span-2 md:border-r-2 md:pr-4 md:border-gray-200">
                        <div class="border-dashed md:border-solid border-b-2 pb-4">
                            <div class="text-xl md:text-lg font-bold text-gray-600 pb-2 mt-4 md:mt-0">
                                Hate Crime Is Feared in Shooting of 2 Indians in Kansas
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-2 pr-6">
                                    India’s government expressed shock after one citizen was killed and another wounded in a bar in suburban Kansas. Another wounded in a bar in suburban Kansas.
                                </div>
                                <div>
                                    <img src="/img/img_5.png">
                                </div>
                            </div>
                        </div>
                        <div class="hidden border-b-2 pb-4 pt-4  md:block ">
                            <div class="font-bold text-gray-600 pb-2">
                                Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                            </div>
                            <div class="">
                                The suit, brought by the autonomous car business Waymo, accuses Uber and a star engineer, Anthony Levandowski, of planning to steal trade secrets.
                            </div>
                        </div>
                        <div class="border-dashed md:border-solid border-b-2 pb-4 pt-4">
                            <div class="text-xl md:text-lg font-bold text-gray-600 pb-2">
                                Hate Crime Is Feared in Shooting of 2 Indians in Kansas
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-2 pr-6">
                                    India’s government expressed shock after one citizen was killed and another wounded in a bar in suburban Kansas. Another wounded in a bar in suburban Kansas.
                                </div>
                                <div>
                                    <img src="/img/img_6.png">
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block md:border-b-0 border-b-2 pb-4 pt-4">
                            <div class="font-bold text-gray-600 pb-2">
                                Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                            </div>
                            <div class="">
                                The suit, brought by the autonomous car business Waymo, accuses Uber and a star engineer, Anthony Levandowski, of planning to steal trade secrets.
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col">
                            <div>
                                <p class="mt-4 md:mt-0 bg-[#FBFF22] font-medium md:p-2 w-1/2 text-lg text-gray-700 text-center">ENTERTAINMENT</p>
                            </div>
                            <div class="my-2 border-dashed md:border-solid border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="my-2 border-dashed md:border-solid border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="my-2 border-dashed md:border-solid border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="my-2 border-dashed md:border-solid border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="my-2 mb-8 md:mb-0 border-dashed md:border-solid border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="hidden md:block my-2 border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="hidden md:block my-2 border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                            <div class="hidden md:block my-2 border-b-2 pb-2">PM unveils Shia status in Coimbatore on Mahashivratri</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="flex flex-col md:border-b-2 md:border-gray-200">
                    <div class="border-b-2 md:border-b-0">
                        <p class="bg-gray-100 font-medium md:p-2 text-lg w-2/5 md:w-3/5 text-gray-700 text-center">SPORTS NEWS</p>
                    </div>
                    <div class="font-bold pb-2 md:pb-6 pt-2 text-xl text-gray-600">
                        COA wants all BCCI bodies to produce compliance report
                    </div>
                    <div class="">
                        After the election, Democrats debated whether to confront Mr. Trump or seek compromise, but riled-up liberals have pushed party leaders into a fight.
                    </div>
                    <div class="md:hidden border-dashed border-b-2 mt-4"></div>
                    <div class="grid grid-cols-2 md:inline-block">
                        <img src="/img/img_7.png" class="mt-10">
                        <div class="font-bold py-6 text-xl text-gray-600 ml-4 my-4 md:ml-0 md:my-4">
                            Series win in Australia hugely satisfying: Upul Tharanga
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:grid md:grid-cols-6 md:gap-4 border-b-2 mb-4 md:mb-10 md:mx-0">
            <div class="col-span-5">
                <div class="">
                    <div class="hidden md:block md:grid md:grid-cols-6 bg-gray-300 py-2">
                        <div class="col-span-1 text-xl pl-4 font-bold text-gray-600">Videos</div>
                        <div class="col-span-4"></div>
                        <div class="col-span-1 text-right text-blue-500 pr-2 font-bold"> View all Videos</div>
                    </div>
                    <div class="md:grid md:grid-cols-3 md:gap-4 md:py-4 md:px-6 md:border-b-2 md:border-l-2 md:border-r-2 md:border-dashed">
                        <div class="col-span-2 md:border-r-2 md:pr-6">
                            <div class="hidden md:block md:grid md:grid-cols-11 py-2 pb-6 cursor-pointer">
                                <div class="text-blue-600 font-bold pr-4">Trending</div>
                                <div class="pr-6">News</div>
                                <div class="pr-6">Entertainment</div>
                                <div></div>
                                <div class="pr-6">Celebs</div>
                                <div class="pr-6">Movie</div>
                                <div class="pr-6">Lifestyle</div>
                                <div class="pr-6">Sports</div>
                                <div class="pr-6">Tech</div>
                                <div class="pr-6">Business</div>
                                <div class="pr-6">Auto</div>
                            </div>
                            <div class="relative">
                                <img src="/img/img_8.png">
                                <div class="absolute -mt-28 md:-mt-24 text-white ml-2 md:w-5/6 md:ml-10">
                                    <div class="grid grid-cols-6 gap-4">
                                        <div class="col-span-1">
                                            <img src="/img/img_12.png" class="w-2/3 md:w-2/6 mt-6">
                                        </div>
                                        <div class="col-span-5">
                                            <p class="text-xl font-bold md:text-3xl">Isro launches 104 satellites in a single mission to create world record</p>
                                            <p>2:30 | By Telegraph</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block ">
                            <div class="relative">
                                <img src="/img/img_9.png">
                                <div class="absolute -mt-52 text-white w-5/6 ml-4">
                                    <img src="/img/img_12.png" class="pb-24 pt-10 w-1/12">
                                    <p>2:30 | By Telegraph</p>
                                </div>
                            </div>
                            <div class="relative py-6">
                                <img src="/img/img_10.png">
                                <div class="absolute -mt-52 text-white w-5/6 ml-4">
                                    <img src="/img/img_12.png" class="py-10 w-1/12">
                                    <p class="font-bold text-lg">Isro launches 104 satellites in a single mission to create world record</p>
                                    <p>2:30 | By Telegraph</p>
                                </div>
                            </div>
                            <div class="relative">
                                <img src="/img/img_11.png">
                                <div class="absolute -mt-52 text-white w-5/6 ml-4">
                                    <img src="/img/img_12.png" class="py-10 w-1/12">
                                    <p class="font-bold text-lg">Isro launches 104 satellites in a single mission to create world record</p>
                                    <p>2:30 | By Telegraph</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block md:grid md:grid-cols-5 md:gap-6 mt-6 mb-4 md:mb-16">
                    <div class="border-dashed border-b-2 md:border-0">
                        <img src="/img/img_13.png">
                        <p class="font-bold py-6 text-xl text-gray-700">The Intimate Lens of Ed van der Elsken</p>
                        <p class=" text-gray-600">Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <img src="/img/img_14.png">
                        <p class="font-bold py-6 text-xl text-gray-700">Gauging the Art Market’s Health</p>
                        <p class=" text-gray-600">Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.</p>
                    </div>
                    <div class="hidden md:block ">
                        <img src="/img/img_15.png">
                        <p class="font-bold py-6 text-xl text-gray-700">What happen when you skip breakfast</p>
                        <p class=" text-gray-600">The old saying, ‘Eat breakfast like a king, lunch like a prince and dinner like a pauper’ couldn’t ring truer. Beginning your day with a heavy breakfast.</p>
                    </div>
                    <div class="hidden md:block ">
                        <img src="/img/img_16.png">
                        <p class="font-bold py-6 text-xl text-gray-700">In London, the Rise of Old-Fashioned </p>
                        <p class=" text-gray-600">Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.</p>
                    </div>
                    <div class="hidden md:block ">
                        <img src="/img/img_17.png">
                        <p class="font-bold py-6 text-xl text-gray-700">6 myths about keeping an aquarium</p>
                        <p class=" text-gray-600">Keeping fish in aquariums is a hobby which is quite common. People are often very apprehensive about keeping fish and having an aquarium.</p>
                    </div>
                </div>

                <div class="md:hidden mx-4">
                    <div class="border-dashed md:border-solid border-b-2 pb-4">
                        <div class="font-bold text-gray-600 pb-2 mt-4 md:mt-0 text-xl">
                            The Intimate Lens of Ed van der Elsken
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-2 pr-6">
                                Two European museums are presenting retrospectives of a man many consider to be one of the best street photographers of the 20th century.
                            </div>
                            <div>
                                <img src="/img/img_13.png">
                            </div>
                        </div>
                    </div>
                    <div class="pb-4">
                        <div class="font-bold text-gray-600 pb-2 mt-4 md:mt-0 text-xl">
                            Gauging the Art Market’s Health
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-2 pr-6">
                                Auctions of Impressionist, modern and Surrealist art at Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.
                            </div>
                            <div>
                                <img src="/img/img_14.png">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-span-1 hidden md:block">
                <div class="flex flex-col">
                    <div class="mb-6">
                        <p class="bg-[#FBFF22] font-medium p-2 w-3/5 text-lg text-gray-600 text-center">MOST POPULAR</p>
                    </div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">1</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">2</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">3</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">4</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">5</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">6</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">7</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">8</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">9</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
                    <div class="my-2text-lg text-gray-700 relative">
                        <p class="text-8xl text-gray-100 font-bold">10</p>
                        <p class="absolute -mt-16 pl-8 ">
                            PM unveils Shia status in Coimbatore on Mahashivratri
                        </p>
                    </div>
                    <div class="border-dashed w-2/6 border ml-6 mb-4"></div>
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
            <div class="text-center col-span-1 font-bold font-['Roboto'] text-gray-700">
                @ 2017 The Telegraph Company
            </div>
            <div class="hidden md:block col-span-5">
                <div class="flex font-['Roboto'] text-gray-700">
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
