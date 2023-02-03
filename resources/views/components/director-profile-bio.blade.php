<div {{ $attributes->merge(['class' => 'hidden mx-auto max-h-70% overflow-y-scroll top-32 pb-4 bg-lmhlMain1 opacity-100 text-lmhlBg1 font-sans text-sm p-4 md:p-10 w-11/12 md:w-4/5 z-50 rounded-md shadow-md origin-center animate-open-bio']) }}>
    <h5 class="font-serif text-right font-light text-2xl -mt-4 -mr-1 md:-mt-8 md:-mr-4 text-lmhlBg1 cursor-pointer" onclick="togglePopup('{{ $className }}')">x</h5>
    <h5 class="font-serif text-lg text-lmhlBg1 mb-2 px-6 font-bold">{{ $fullName }}</h5>
    <p class="px-6 py-3 leading-loose">{{ $bio }}</p>
</div>