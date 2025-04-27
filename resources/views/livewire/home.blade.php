<?php

use function Livewire\Volt\{state};

//

?>

<div class="grow flex flex-col">
    <div class="h-dvh w-full relative" x-data="{ height: 0 }" x-resize="height = $height">
        <div class="absolute inset-0 pointer-events-none -z-10">
            <video autoplay muted playsinline loop class="w-full pointer-events-none object-cover" :style="'height: ' + height + 'px'">
                <source src="{{ asset('/videos/home.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="size-full bg-black/50 flex justify-center items-center">
            <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" class="flex flex-col items-center gap-8">
                <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-full'" class="text-white text-center flex flex-col items-center gap-2 sm:gap-2.5 transition-all duration-[1500ms]">
                    <div class="sm:text-xl font-light tracking-wide">
                        The Ancient Tradition of Hospitality
                    </div>
                    <div class="font-mrs-eaves text-5xl sm:text-7xl tracking-widest">
                        PHILOXENIA
                    </div>
                    <div class="border-t border-white w-2/12"></div>
                </div>
                <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-full'" class="transition-all duration-[1000ms] delay-700">
                    <button class="cursor-pointer border uppercase w-min border-white text-white hover:bg-white hover:text-black max-sm:text-sm sm:py-4 py-2 px-20 sm:px-28 transition-all duration-500">reserve</button>
                </div>
            </div>
        </div>
    </div>
    <div class="py-14 flex justify-center">
        <div class="w-4/5 sm:w-11/12 flex flex-col gap-24">
            <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'" class="text-center font-light sm:text-lg transition-all duration-[1000ms]">
                The Best Greek restaurant in Dubai, Milos is devoted to cooking fish perfectly, with artisan precision. Where sharing is our tradition and the finest ingredients are harnessed by chefs to create masterpieces.
            </div>
            <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" :class="show ? '*:opacity-100 *:translate-y-0' : '*:opacity-0 *:translate-y-8'" class="border border-accent py-8 flex flex-col gap-2 sm:gap-4 items-center *:transition-all *:duration-[1000ms]">
                <div class="text-center font-mrs-eaves text-accent text-3xl sm:text-4xl uppercase">Opening Hours</div>
                <div class="border-t border-accent w-1/6 sm:w-1/12"></div>
                <div class="flex flex-col items-center font-light sm:text-xl max-sm:w-4/5 text-center">
                    <div>
                        Monday - Thursday, 12pm - 4pm | 6pm - 1am
                    </div>
                    <div>
                        Friday - Sunday, 12pm - 1am
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4 sm:py-14 flex flex-col gap-12 sm:gap-24 items-center">
        <div class="font-mrs-eaves flex flex-col gap-4 items-center text-4xl uppercase w-11/12">
            <div>What's On</div>
            <div class="border-t w-1/6 sm:w-1/12"></div>
        </div>
        <div class="flex max-sm:flex-col-reverse max-sm:gap-12 *:flex-1 *:grow w-full sm:h-dvh">
            <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-1/4'" class="flex flex-col gap-7 items-center justify-center transition-all duration-[1000ms]">
                <div class="font-mrs-eaves text-3xl sm:text-4xl font-light uppercase text-center w-4/5 sm:w-11/12">
                    Business Lunch At Estiatorio Milos
                </div>
                <div class="border-t w-1/12"></div>
                <div class="font-light text-center w-4/5 sm:w-11/12 sm:text-lg">
                    Indulge in a culinary voyage with a delectable three-course lunch experience showcasing the world's most exquisite Mediterranean seafood.
                </div>
                <div class="border-t w-1/12"></div>
                <div class="flex flex-col gap-2 items-center *:last:font-light font-bold sm:text-lg tracking-wide">
                    <div>Monday – Friday</div>
                    <div>12pm – 4pm</div>
                    <div>AED 200</div>
                    <div class="underline">View Menu</div>
                </div>
                <div>
                    <button class="cursor-pointer border max-sm:text-sm uppercase w-min border-black text-black hover:bg-black hover:text-white py-4 px-20 sm:px-28 transition-all duration-500">reserve</button>
                </div>
            </div>
            <div class="relative">
                <img class="size-full object-cover" src="{{ asset('/images/home1.webp') }}">
                <div class="absolute inset-0 bg-gradient-to-t from-white to-transparent to-30%"></div>
            </div>
        </div>
    </div>
    <div class="py-64 sm:py-72 flex justify-center items-center relative">
        <div class="flex flex-col items-center w-full gap-2 text-white">
            <div class="text-4xl uppercase font-mrs-eaves">
                Our Gastronomy
            </div>
            <div class="border-t border-white w-1/12"></div>
        </div>
        <div class="absolute inset-0 -z-20 overflow-clip">
            <video autoplay muted playsinline loop class="sm:w-full pointer-events-none object-cover h-full">
                <source src="{{ asset('/videos/ocean.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-deep-ocean to-transparent"></div>
    </div>
    <div x-data="{ height: 0 }" class="py-14 flex justify-center max-sm:bg-deep-ocean sm:bg-gradient-to-t sm:from-deep-ocean/50 sm:to-deep-ocean to-20% relative">
        <div class="flex max-sm:flex-col *:flex-1 gap-12 sm:gap-24 w-[98%]">
            <div class="flex flex-col max-sm:gap-10 sm:items-center">
                <div :style="'height: ' + height*0.7 + 'px'" class="overflow-clip flex items-center max-sm:w-11/12 max-sm:mr-auto">
                    <img class="object-cover" src="{{ asset('/images/home2.webp') }}">
                </div>
                <div class="grow flex flex-col justify-center gap-2 w-11/12 sm:hidden mx-auto">
                    <div class="font-mrs-eaves text-accent text-2xl sm:text-3xl uppercase">
                        Begins At Sea
                    </div>
                    <div class="text-white font-light sm:text-lg">
                        The ancient customs of early mornings and tremendous hard work underpin the excellence of fish and seafood, from the fisherman's boat to the chef's kitchen.
                    </div>
                </div>
                <div x-resize="height = $height" class="h-[80vh] w-11/12 ml-auto flex items-center justify-end sm:hidden">
                    <img class="h-4/5 w-4/5 object-cover" src="{{ asset('/images/home3.webp') }}">
                </div>
                <div class="flex flex-col gap-2 sm:w-3/4 sm:pt-40 sm:pb-72 max-sm:w-11/12 max-sm:mx-auto">
                    <div class="font-mrs-eaves text-accent text-2xl sm:text-3xl uppercase">
                        Earth’s Raw Materials
                    </div>
                    <div class="text-white font-light text-lg">
                        Ingredients are the canvas upon which the chef paints a masterpiece, the building blocks giving each dish its unique character and flair.
                    </div>
                </div>
                <div :style="'height: ' + height*0.6 + 'px'" class="overflow-clip flex items-center w-4/5">
                    <img class="object-cover" src="{{ asset('/images/home4.webp') }}">
                </div>
            </div>
            <div class="flex flex-col">
                <div class="grow flex flex-col justify-center gap-2 w-3/4 max-sm:hidden">
                    <div class="font-mrs-eaves text-accent text-3xl uppercase">
                        Begins At Sea
                    </div>
                    <div class="text-white font-light text-lg">
                        The ancient customs of early mornings and tremendous hard work underpin the excellence of fish and seafood, from the fisherman's boat to the chef's kitchen.
                    </div>
                </div>
                <div class="w-full">
                    <img x-resize="if($width > 640) height = $height" class="h-dvh max-sm:hidden w-full" src="{{ asset('/images/home3.webp') }}">
                </div>
                <div class="grow flex flex-col justify-center gap-2 mx-auto w-11/12 sm:w-3/4">
                    <div class="font-mrs-eaves text-accent text-2xl sm:text-3xl uppercase">
                        Artisan Precision
                    </div>
                    <div class="text-white font-light sm:text-lg">
                        Our philosophy is simple. We are devoted to cooking fish perfectly. It is our life’s work.
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 flex justify-center items-center">
                <div class="w-[96%] flex flex-col gap-4 uppercase sm:text-[13rem] *:first:text-right font-mrs-eaves text-outline-white">
                    <div class="max-sm:text-7xl">Artisan</div>
                    <div class="max-sm:text-6xl">Precision</div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-dvh relative">
        <div class="absolute -z-10 inset-0 overflow-clip">
            <img class="object-cover size-full" src="{{ asset('/images/home5.webp') }}">
        </div>
        <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" :class="show ? '*:opacity-100 *:translate-y-0' : '*:opacity-0 *:translate-y-32'" class="size-full overflow-clip bg-black/50 flex flex-col gap-4 pt-44 justify-center items-center *:transition-all *:duration-[1000ms]">
            <div class="font-mrs-eaves text-5xl sm:text-7xl text-white text-center uppercase">
                Where <br> Sharing Is <br> Our <br> Tradition
            </div>
            <div class="border-t w-1/12 border-white">
            </div>
            <div class="sm:w-1/2  text-white font-light text-center">
                Sharing is an enduring tradition that connects us together, it's a timeless practice that transcends cultural boundaries, enriching our lives with the warmth of togetherness and the joy of generosity.
            </div>
        </div>
    </div>
    <div class="sm:h-dvh *:flex-1 sm:*:grow flex max-sm:flex-col max-sm:gap-12">
        <div class="overflow-clip relative flex items-center">
            <div class="absolute inset-0 z-10 bg-gradient-to-t from-white to-transparent to-30%"></div>
            <img class="object-cover max-sm:w-full max-sm:h-[70vh]" src="{{ asset('/images/home6.webp') }}">
        </div>
        <div class="flex items-center">
            <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" :class="show ? '*:opacity-100 *:translate-y-0' : '*:opacity-0 *:translate-y-32'" class="flex flex-col items-center text-center gap-8 *:transition-all *:duration-[1000ms]">
                <div class="font-mrs-eaves text-4xl uppercase">
                    Taste Through Simplicity
                </div>
                <div class="border-t w-1/12"></div>
                <div class="w-11/12 font-light sm:text-lg">
                    The Mediterranean has a wonderfully simple charm that goes beyond the crystal-clear water and the unique architecture. Nothing captures this better than the delicious simplicity of the Greek cuisine. Welcome to Milos.
                </div>
                <div class="border-t w-1/12"></div>
            </div>
        </div>
    </div>
    <div class="py-14 flex flex-col items-center gap-10">
        <div class="flex flex-col items-center gap-6 w-11/12">
            <div class="font-mrs-eaves uppercase text-4xl tracking-wide">
                Menus
            </div>
            <div class="border-t w-12"></div>
        </div>
        <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" class="w-11/12 *:h-[50vh] flex gap-2 max-sm:*:shrink-0 max-sm:overflow-x-auto max-sm:snap-x snap-mandatory max-sm:*:snap-center *:overflow-clip *:size-full *:*:size-full *:relative">
            <div class="group">
                <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-32'" class="absolute z-10 inset-0 bg-gradient-to-t from-black/70 to-transparent uppercase font-mrs-eaves flex justify-center items-end text-white p-4 text-2xl transition-all duration-[1000ms]">
                    food menu
                </div>
                <img class="group-hover:scale-125 transition-all duration-700" src="{{ asset('/images/home7.webp') }}">
            </div>
            <div class="group">
                <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-32'" class="absolute z-10 inset-0 bg-gradient-to-t from-black/70 to-transparent uppercase font-mrs-eaves flex justify-center items-end text-white p-4 text-2xl transition-all duration-[1000ms]">
                    dessert menu
                </div>
                <img class="group-hover:scale-125 transition-all duration-700" src="{{ asset('/images/home8.webp') }}">
            </div>
            <div class="group">
                <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-32'" class="absolute z-10 inset-0 bg-gradient-to-t from-black/70 to-transparent uppercase font-mrs-eaves flex justify-center items-end text-white p-4 text-2xl transition-all duration-[1000ms]">
                    cocktail menu
                </div>
                <img class="group-hover:scale-125 transition-all duration-700" src="{{ asset('/images/home9.webp') }}">
            </div>
        </div>
        <div>
            <button class="cursor-pointer border uppercase w-min border-black text-black hover:bg-black hover:text-white py-4 px-24 transition-all duration-500 whitespace-nowrap">veiw menu</button>
        </div>
        <div class="flex flex-col items-center gap-3 text-accent text-2xl text-center sm:text-3xl font-mrs-eaves font-light">
            <div>
                2024 Michelin Guide Selection
            </div>
            <div x-data="{ show: true }" class="flex flex-col items-center gap-3 max-sm:w-4/5">
                <div x-show="show" x-collapse.duration.1000ms>
                    <div class="flex flex-col items-center gap-3">
                        <div class="border-t border-accent w-1/12"></div>
                        <div>
                            2024 – Award of Excellence at the Wine Spectator ( 1 glass)
                        </div>
                        <div class="border-t border-accent w-1/12"></div>
                        <div>
                            2023 Michelin Guide Selection
                        </div>
                        <div class="border-t border-accent w-1/12"></div>
                        <div>
                            2023 Award of Excellence at the Wine Spectator
                        </div>
                        <div class="border-t border-accent w-1/12"></div>
                        <div>
                            World Culinary Awards
                        </div>
                        <div class="border-t border-accent w-1/12"></div>
                        <div>
                            Middle East's Best New Hotel Restaurant
                        </div>
                        <div class="border-t border-accent w-1/12"></div>
                        <div>
                            World's Best New Hotel Restaurant
                        </div>
                    </div>
                </div>
                <button @click="show = !show" class="cursor-pointer">
                    <svg :class="show ? 'scale-100' : '-scale-100'" class="size-10 text-accent transition-all duration-1000" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m5 15 7-7 7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="sm:py-14 bg-gradient-to-b from-transparent to-20% to-accent/50 flex justify-center">
        <div class="flex flex-col w-[98%]">
            <div class="flex flex-col gap-2 items-center text-center">
                <div class="uppercase text-lg">
                    Our Mediterranean
                </div>
                <div class="uppercase font-mrs-eaves text-4xl">
                    Gastronomy Journey
                </div>
                <div class="border-t w-1/6 sm:w-1/12"></div>
            </div>
            <div x-data="{ height: 0 }" class="flex max-sm:flex-col *:flex-1 *:grow py-14 gap-6 sm:gap-24">
                <div class="flex flex-col sm:items-center max-sm:gap-6">
                    <div class="overflow-clip max-sm:w-11/12">
                        <img src="{{ asset('/images/home10.webp') }}">
                    </div>
                    <div class="flex flex-col gap-4 max-sm:mx-auto w-11/12 sm:w-4/5 sm:hidden">
                        <div class="font-mrs-eaves text-accent text-2xl sm:text-4xl uppercase">The Origins</div>
                        <div class="sm:text-xl font-light">
                            Always finding the best the sea has to offer from flavours of fresh seafood and citrus accents to aromas coming from the fertile earth.
                        </div>
                    </div>
                    <div class="overflow-clip w-11/12 ml-auto sm:hidden">
                        <img x-resize="height = $height" class="h-[60vh] w-full" src="{{ asset('/images/home11.webp') }}">
                    </div>
                    <div class="flex flex-col gap-4 max-sm:mx-auto w-11/12 sm:w-4/5 sm:py-48">
                        <div class="font-mrs-eaves text-accent text-2xl sm:text-4xl uppercase">The Process</div>
                        <div class="sm:text-xl font-light">
                            Giving birth to new flavours through traditional spirit and uncompromising standards of quality and uniqueness.
                        </div>
                    </div>
                    <div :style="'height: ' + height*0.6 + 'px'" class="overflow-clip flex justify-center items-center">
                        <img class="w-full object-cover" src="{{ asset('/images/home12.webp') }}">
                    </div>
                </div>
                <div class="flex flex-col justify-center">
                    <div class="flex flex-col gap-4 py-14 w-4/5 max-sm:hidden">
                        <div class="font-mrs-eaves text-accent text-4xl uppercase">The Origins</div>
                        <div class="text-xl font-light">
                            Always finding the best the sea has to offer from flavours of fresh seafood and citrus accents to aromas coming from the fertile earth.
                        </div>
                    </div>
                    <div class="overflow-clip max-sm:hidden">
                        <img x-resize="if($width > 60) height = $height" class="h-dvh w-full" src="{{ asset('/images/home11.webp') }}">
                    </div>
                    <div class="flex flex-col gap-4 sm:py-14 max-sm:mx-auto w-11/12 sm:w-4/5">
                        <div class="font-mrs-eaves text-accent text-2xl sm:text-4xl uppercase">The Experience </div>
                        <div class="sm:text-xl font-light">
                            Following an edict of perfect simplicity to preserve each ingredient’s distinct flavour and nutritional value.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-14 flex justify-center">
        <div x-data="{ show : false }" x-intersect:enter="show = true" x-intersect:leave="show = false" class="border border-accent py-8 w-11/12 flex *:flex-1 max-sm:flex-col max-sm:gap-8 max-sm:items-center *:w-4/5 max-sm:text-center">
            <div :class="show ? '*:opacity-100 *:translate-y-0' : '*:opacity-0 *:translate-y-8'" class="*:transition-all *:duration-[1000ms] flex flex-col gap-1.5 sm:gap-3 items-center">
                <div class="text-center font-mrs-eaves text-accent text-3xl sm:text-4xl uppercase">Dress Code Policy:</div>
                <div class="border-t border-accent w-1/6 sm:w-1/12"></div>
                <div class="flex flex-col items-center font-light sm:text-lg">
                    Smart Elegant (Long Trousers Only)
                </div>
            </div>
            <div :class="show ? '*:opacity-100 *:translate-y-0' : '*:opacity-0 *:translate-y-8'" class="*:transition-all *:duration-[1000ms] flex flex-col gap-1.5 sm:gap-3 items-center">
                <div class="text-center font-mrs-eaves text-accent text-3xl sm:text-4xl uppercase">Age Policy:</div>
                <div class="border-t border-accent w-1/6 sm:w-1/12"></div>
                <div class="flex flex-col items-center font-light sm:text-lg">
                    Children under the age of 10 are welcome until 9pm
                </div>
            </div>
        </div>
    </div>
    <div class="pt-14 pb-8 bg-black/5 flex flex-col items-center gap-12">
        <div class="flex items-center w-11/12 sm:*:flex-1 max-sm:flex-col max-sm:justify-start max-sm:gap-4">
            <div class="font-mrs-eaves uppercase text-3xl sm:text-4xl max-sm:w-full">
                Stay In Touch
            </div>
            <div class="font-light flex justify-start sm:text-lg">
                Sign up to to be the first to know about our special offers.
            </div>
            <div class="flex sm:justify-end max-sm:w-full">
                <button class="cursor-pointer border uppercase w-min border-black text-black hover:bg-black hover:text-white max-sm:text-sm py-4 px-20 sm:px-12 transition-all duration-500 whitespace-nowrap">Sign up</button>
            </div>
        </div>
        <div class="w-11/12 flex justify-around sm:items-center *:font-medium *:first:font-normal max-sm:flex-col max-sm:gap-8">
            <div class="font-mrs-eaves text-5xl sm:text-4xl">
                Restro
            </div>
            <div class="flex justify-around w-full max-sm:order-last max-sm:flex-col *:py-4 max-sm:*:odd:border-y max-sm:*:odd:border-black">
                <div>
                    Work With Us
                </div>
                <div>
                    Terms & Conditions
                </div>
                <div>
                    Contact Us
                </div>
            </div>
            <div class="font-mrs-eaves text-xl uppercase sm:text-2xl flex max-sm:flex-col sm:items-center gap-4 whitespace-nowrap">
                <div>Follow Us</div>
                <div class="flex items-center gap-3">
                    <div class="border p-1">
                        <svg class="size-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="border p-1">
                        <svg class="size-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-light sm:text-xl">© 2024 Restro. All Rights Reserved.</div>
    </div>
</div>