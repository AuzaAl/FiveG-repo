<header class=" w-full h-25 fixed top-0 z-999">
        <div class="flex px-8 md:px-18 w-full h-full justify-between items-center">
        <img src="{{ Vite::asset('resources/images/FIVEG.png') }}" alt="logo" class=" w-30 md:w-50">
        @if ($type !== 'noLink')
        <div class="flex items-center">
                <a href="" class="flex flex-row gap-2">
                    <div class=" size-4 md:size-8 rounded-full bg-GreenA flex justify-center items-center">
                    <p class="font-anie text-[10px] md:text-xl text-white">!</p>
                    </div>
                    <div class="flex flex-row *:text-xs md:*:text-2xl *:text-white gap-1">
                        <i class="font-agua mt-1">G</i>
                        <p class="font-bsd">et in touch</p>
                    </div>
                </a>
            </div>
        </div>
        @endif
</header>