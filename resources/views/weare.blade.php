@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24">
    <div>
        <img class="w-full" src="/storage/images/calum-lewis-we_are.jpeg" alt="We-are image">
    </div>

    <h1 class="font-serif text-5xl text-center mt-12 mb-6 text-lmhlPanel">We are... (website under construction)</h1>

    <div class="w-full hidden profile-popup-bg z-40">
        <div class="hidden mel left-1/4 top-32 bg-lmhlMain1 text-lmhlBg1 font-sans text-sm p-10 w-5/6 md:w-1/2 z-50 rounded-md shadow-md">
            <h5 class="font-serif text-right font-bold text-2xl -mt-8 -mr-4 text-lmhlPanel2 cursor-pointer" onclick="togglePopup('mel')">x</h5>
            <h5 class="font-serif text-lg text-lmhlBg1 mb-2 px-6 font-bold">Mel Lagan</h5>
            <p class="px-6 py-3 leading-loose">My nursing background is mainly in renal medicine caring for patients with chronic kidney disease. As a holistic therapist, I help people re-establish physical, emotional and mental balance and well-being, drawing on a number of modalities including classic reflexology, RLD (reflexology lymph drainage) and Bach Flower Essences.  I coach people to help them reframe stress and anxiety, recognise unhelpful thought patterns and behaviours and develop resilience in the face of life’s challenges. I am passionate about empowering my clients through education and knowledge sharing so they can begin to take charge of their own health and make lifestyle decisions that will support their well-being.</p>
        </div>

        <div class="hidden sarah left-1/4 top-32 bg-lmhlMain1 text-lmhlBg1 font-sans text-sm p-10 w-5/6 md:w-1/2 z-50 rounded-md shadow-md">
            <h5 class="font-serif text-right font-bold text-2xl -mt-8 -mr-4 text-lmhlPanel2 cursor-pointer" onclick="togglePopup('sarah')">x</h5>
            <h5 class="font-serif text-lg text-lmhlBg1 mb-2 px-6 font-bold">Sarah Elder</h5>
            <p class="px-6 py-3 leading-loose">Awaiting text</p>
        </div>

        <div class="hidden liz left-1/4 top-32 bg-lmhlMain1 text-lmhlBg1 font-sans text-sm p-10 w-5/6 md:w-1/2 z-50 rounded-md shadow-md">
            <h5 class="font-serif text-right font-bold text-2xl -mt-8 -mr-4 text-lmhlPanel2 cursor-pointer" onclick="togglePopup('liz')">x</h5>
            <h5 class="font-serif text-lg text-lmhlBg1 mb-2 px-6 font-bold">Elizabeth Cooper</h5>
            <p class="px-6 py-3 leading-loose">Awaiting text</p>
        </div>

        <div class="hidden annette left-1/4 top-32 bg-lmhlMain1 text-lmhlBg1 font-sans text-sm p-10 w-5/6 md:w-1/2 z-50 rounded-md shadow-md">
            <h5 class="font-serif text-right font-bold text-2xl -mt-8 -mr-4 text-lmhlPanel2 cursor-pointer" onclick="togglePopup('annette')">x</h5>
            <h5 class="font-serif text-lg text-lmhlBg1 mb-2 px-6 font-bold">Annette Russell</h5>
            <p class="px-6 py-3 leading-loose">I’m a biblioholic: happy when living between the covers of a book – preferably one that is hardbound and gorgeously illustrated! When confronted by a blank page, however, I’m equally happy to provide my own text and daydreams. Indeed, I’ve heard homeopathy defines health as the freedom to express creativity. Every blank page is an opportunity for creating health. In the nonfictional world, I teach, translate, proofread, write and edit, and have several years’ experience in the set-up and management of private medical practices in Germany.</p>
        </div>

        <div class="hidden emily left-1/4 top-32 bg-lmhlMain1 text-lmhlBg1 font-sans text-sm p-10 w-5/6 md:w-1/2 z-50 rounded-md shadow-md">
            <h5 class="font-serif text-right font-bold text-2xl -mt-8 -mr-4 text-lmhlPanel2 cursor-pointer" onclick="togglePopup('emily')">x</h5>
            <h5 class="font-serif text-lg text-lmhlBg1 mb-2 px-6 font-bold">Emily Godfrey</h5>
            <p class="px-6 py-3 leading-loose">Awaiting text</p>
        </div>

        <div class="hidden anaïs left-1/4 top-32 bg-lmhlMain1 text-lmhlBg1 font-sans text-sm p-10 w-5/6 md:w-1/2 z-50 rounded-md shadow-md">
            <h5 class="font-serif text-right font-bold text-2xl -mt-8 -mr-4 text-lmhlPanel2 cursor-pointer" onclick="togglePopup('anaïs')">x</h5>
            <h5 class="font-serif text-lg text-lmhlBg1 mb-2 px-6 font-bold">Anaïs Russell</h5>
            <p class="pt-6 px-6 leading-loose">My BA is in Philosophy, Psychology and History of Science from the University of Leeds. By day I have a full-time IT job, and pursue my other passions in my spare time: homeopathy at The School of Health, and  martial arts. I love long walks in our local woods and nature reserves, and hiking through the Dales or Peak District with my wolfdog.</p>
            <p class="pt-3 pb-6 px-6 leading-loose">I am grateful to have this opportunity of supporting Create My Health CIC and the People’s Health Alliance with my IT skills and deep interest in all matters pertaining to health.</p>
        </div>
    </div>

    <div class="grid gap-3 lg:gap-4 md:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 px-3 md:px-5 sm:px-4">

        <x-director-profile-panel class="from-mel_profile_bg1 to-mel_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full max-h-full w-48 min-w-[12rem] object-fill rounded-tl-md  rounded-bl-md" src="/storage/images/mel.jpeg" alt="Mel Lagan">
            </x-slot>

            <x-slot:name>Mel Lagan</x-slot>

            <x-slot:roles>Co-founder, Director, Nurse, Reflexology, HeartMath, Bach Flower Essences</x-slot>

            <x-slot:blurb class="bg-lmhlPanel1">
                <p class="px-6 py-3">My nursing background is mainly in renal medicine caring for patients with chronic kidney disease. As a holistic therapist, I help people re-establish physical, emotional and mental balance and well-being, drawing on a number of modalities including classic reflexology, RLD (reflexology lymph drainage) and Bach Flower Essences.  I coach people to help them reframe stress and anxiety, recognise unhelpful thought patterns and behaviours and develop resilience in the face of life’s challenges. I am passionate about empowering my clients through education and knowledge sharing so they can begin to take charge of their own health and make lifestyle decisions that will support their well-being.</p>
            </x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-sarah_profile_bg1 to-sarah_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/sarah.jpeg" alt="Sarah Elder">
            </x-slot>

            <x-slot:name>Sarah Elder</x-slot>

            <x-slot:roles>Co-founder, Director</x-slot>

            <x-slot:blurb class="bg-lmhlPanel2 sarah">
                <p class="px-6 py-3">Awaiting text...</p>
            </x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-liz_profile_bg1 to-liz_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/liz.jpeg" alt="Elizabeth Cooper">
            </x-slot>

            <x-slot:name>Elizabeth Cooper</x-slot>

            <x-slot:roles>Co-founder, Director</x-slot>

            <x-slot:blurb class="bg-lmhlPanel3 elizabeth">
                <p class="px-6 py-3">Awaiting text...</p>
            </x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-netty_profile_bg1 to-netty_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/annette.jpeg" alt="Annette Russell">
            </x-slot>

            <x-slot:name>Annette Russell, MA</x-slot>

            <x-slot:roles>Co-founder, Director</x-slot>

            <x-slot:blurb class="bg-lmhlPanel1 annette">
                <p class="px-6 py-3">I’m a biblioholic: happy when living between the covers of a book – preferably one that is hardbound and gorgeously illustrated! When confronted by a blank page, however, I’m equally happy to provide my own text and daydreams. Indeed, I’ve heard homeopathy defines health as the freedom to express creativity. Every blank page is an opportunity for creating health. In the nonfictional world, I teach, translate, proofread, write and edit, and have several years’ experience in the set-up and management of private medical practices in Germany.</p>
            </x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-emily_profile_bg1 to-emily_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/emily.jpeg" alt="Emily Godfrey">
            </x-slot>

            <x-slot:name>Emily Godfrey</x-slot>

            <x-slot:roles>Co-founder, Director</x-slot>

            <x-slot:blurb class="bg-lmhlPanel2 emily">
                <p class="px-6 py-3">Awaiting text...</p>
            </x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-anais_profile_bg1 to-anais_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/anais.jpeg" alt="Anaïs Russell">
            </x-slot>

            <x-slot:name>Anaïs Russell</x-slot>

            <x-slot:roles>Data control, IT support</x-slot>

            <x-slot:blurb class="bg-lmhlPanel3 anaïs">
                <p class="px-6 pt-3">My BA is in Philosophy, Psychology and History of Science from the University of Leeds. By day I have a full-time IT job, and pursue my other passions in my spare time: homeopathy at The School of Health, and  martial arts. I love long walks in our local woods and nature reserves, and hiking through the Dales or Peak District with my wolfdog.</p>

                <p class="px-6 pb-6 pt-3">I am grateful to have this opportunity of supporting Create My Health CIC and the People’s Health Alliance with my IT skills and deep interest in all matters pertaining to health.</p>
            </x-slot>
        </x-director-profile-panel>

    </div>

    <div class="px-2 py-4 bg-lmhlHighlight1 text-lmhlBg1 text-lg tracking-tight font-bold rounded-lg shadow-md mt-10 w-1/3 text-center mx-auto">Support us</div>
</div>

@endsection

<script type="text/javascript" defer>

    const togglePopup = (director) => {
        var className = director.split(' ')[0].toLowerCase()

        var elProfileBg = document.querySelector(".profile-popup-bg")
        elProfileBg.classList.toggle('hidden')
        elProfileBg.classList.toggle('relative')

        var elBlurb = document.querySelector("." + className)
        elBlurb.classList.toggle('hidden')
        elBlurb.classList.toggle('fixed')
    }

</script>