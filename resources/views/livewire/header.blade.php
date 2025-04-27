<?php

use function Livewire\Volt\{state};

//

?>

<div x-data="header" class="flex flex-col items-center fixed z-30 top-0 inset-0 pointer-events-none">
    <div :class="show ? 'bg-deep-ocean' : (isAtTop && 'bg-transparent')" class="transition-all duration-500 w-full pointer-events-auto relative">
        <div :class="isAtTop ? 'opacity-0' : 'opacity-100'" class="-z-10 absolute inset-0 bg-gradient-to-b from-deep-ocean/70 to-transparent transition-all duration-500"></div>
        <div class="sm:w-[96%] w-4/5 mx-auto flex justify-between items-center py-8">
            <div class="flex-1 flex justify-start max-sm:fixed max-sm:bottom-4 max-sm:right-4 max-sm:z-10">
                <button :class="show ? 'gap-0' : 'gap-2'" @click="show = !show;" class="bg-accent relative cursor-pointer rounded-full size-13 p-4 flex flex-col justify-center transition-all duration-200 *:transition-all *:duration-500 outline-none">
                    <div x-show="!show" class="border-t border-white w-3/5"></div>
                    <div :class="show ? 'rotate-45' : ''" class="border-t border-white 'w-full"></div>
                    <div :class="show ? '-rotate-45' : ''" class="border-t border-white 'w-full"></div>
                </button>
            </div>
            <div class="font-mrs-eaves text-white text-3xl sm:text-4xl">
                Restro
            </div>
            <div class="flex-1 flex justify-end">
                <button class="bg-accent uppercase max-sm:text-sm text-white hover:bg-transparent hover:text-accent border border-accent transition-all duration-200 py-3 sm:py-4.5 px-8 sm:px-12 text-sm tracking-widest outline-none cursor-pointer">
                    reserve
                </button>
            </div>
        </div>
    </div>
    <div x-cloak :class="show ? 'opacity-100' : 'opacity-0 pointer-events-none'" class="grow w-full pointer-events-none transition-all duration-500 origin-top bg-white">
        <div :class="show || 'pointer-events-none'" class="size-full bg-gradient-to-b from-deep-ocean to-deep-ocean/95 pointer-events-auto grid grid-cols-3 transition-all duration-500">
        </div>
    </div>
</div>