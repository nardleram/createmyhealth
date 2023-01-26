@props([
    'name',
    'roles',
    'blurb'
])

<div class="mt-5 rounded-md shadow-md">

    <div {{ $attributes->merge(['class' => 'w-full h-56 flex flex-row rounded-md font-serif bg-gradient-to-b']) }}>

        <div class="mr-4 h-56">
            {{ $profilepic }}
        </div>

        <div class="relative pt-4 min-h-full w-full pr-3">
            <h4 class="text-lg leading-tight mb-2 tracking-tight text-lmhlPanel">{{ $name }}</h4>
            <h5 class="leading-tight text-sm">{{ $roles }}</h5>

            <div class="absolute bottom-2 right-2">
                <button class="font-sans text-xs font-light text-right text-lmhlMain2 cursor-pointer hover:text-lmhlPanel transition-colors delay-100 duration-250" onclick="togglePopup('{{ $name }}')">
                    View bio...
                </button>
            </div>
        </div>

    </div>

</div>