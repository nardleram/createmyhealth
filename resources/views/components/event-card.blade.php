@props([
    'name',
    'className',
    'description',
    'image'
])

<div class="flex flex-row w-full sm:w-[500px] md:w-[480px] xl:w-[400px] rounded-md shadow-md mx-auto h-56 bg-white">
    <div class="mr-4 max-h-56 w-40 min-w-[160px] overflow-y-hidden rounded-bl-md">
        {{ $image }}
    </div>

    <div class="relative pt-4 min-h-full w-full pr-3">
        <h4 class="text-base md:text-lg leading-tight mb-2 tracking-tight text-lmhlPanel font-serif">{{ $name }}</h4>
        <div class="leading-tight font-light text-xs sm:text-sm max-h-28 md:max-h-56 overflow-y-scroll">{{ $description }}</div>

        <div class="absolute bottom-2 right-2">
            <button class="font-sans text-xs font-light text-right text-lmhlMain2 cursor-pointer hover:text-lmhlPanel transition-colors delay-100 duration-250" onclick="togglePopup('{{ $className }}')">
                View details...
            </button>
        </div>
    </div>
</div>