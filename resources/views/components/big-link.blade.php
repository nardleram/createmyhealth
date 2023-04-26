@props([
    'url',
    'text',
    'target'
])

<div class="w-11/12 md:w-1/2 my-10 mx-auto py-4 text-lmhlBg1 text-lg text-center tracking-tight font-bold bg-cmhLogoGreen cursor-pointer rounded-lg shadow-md hover:bg-cmhLogoDarkGreen hover:shadow-lg hover:text-white">
    <a href="{{ $url }}" target="{{ $target }}">{{ $text }}</a>
</div>