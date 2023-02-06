@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24">
    <div>
        <img class="w-full" src="/storage/images/calum-lewis-we_are.jpeg" alt="We-are image">
    </div>

    <h1 class="font-serif text-5xl text-center mt-12 mb-6 text-lmhlPanel">We are... (website under construction)</h1>

    <div class="top-0 left-0 w-full h-full hidden profile-popup-bg z-40 bg-black opacity-95 origin-center animate-open-bio-bg">
        <x-director-profile-bio class="liz">
            <x-slot:className>
                liz
            </x-slot>

            <x-slot:fullName>
                Liz Cooper
            </x-slot>

            <x-slot:bio>I graduated as a nutritional therapist in 2010, after many years of trying different modalities whilst on my own health journey.  Since that time, I have helped many people turn their health around with nutrition and lifestyle changes.  However, there’s often something that stops someone maintaining those changes.  I believe that something is emotional resilience, a fundamental piece of the jigsaw in wellness, and it was this realisation that led me to train as a HeartMath coach and most recently a Forest Bathing guide.  Alongside my clinic, I work as a technical advisor for a probiotics company, providing education in gut health to fellow practitioners and consumers.  I am passionate about being able to pass on my knowledge and experience to empower others to support their own health, physically, mentally, emotionally and spiritually.  Outside of work, I love to explore meditation, get out into nature with my dog (and my kids if I can persuade them to come!) and I’ve just discovered yoga, which is so enjoyable after a day at my desk!  We have a fantastic vision for Create My Health, and I’m really grateful, and excited, to be a part of it. </x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="mel">
            <x-slot:className>
                mel
            </x-slot>

            <x-slot:fullName>
                Mel Lagan
            </x-slot>

            <x-slot:bio>My nursing background is mainly in renal medicine caring for patients with chronic kidney disease. As a holistic therapist, I help people re-establish physical, emotional and mental balance and well-being, drawing on a number of modalities including classic reflexology, RLD (reflexology lymph drainage) and Bach Flower Essences.  I coach people to help them reframe stress and anxiety, recognise unhelpful thought patterns and behaviours and develop resilience in the face of life’s challenges. I am passionate about empowering my clients through education and knowledge sharing so they can begin to take charge of their own health and make lifestyle decisions that will support their well-being.<br>In my free time, I am happiest  roaming the local woodlands, foraging, connecting with mother Earth and making herbal remedies for personal use.</x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="sarah">
            <x-slot:className>
                sarah
            </x-slot>

            <x-slot:fullName>
                Sarah Elder
            </x-slot>

            <x-slot:bio>Apparently as a child I took the head off my Tiny Tears doll telling my Mum I wanted to see inside! So I guess it is unsurprising I eventually read Psychology at University and after a six year detour into the world of retail, re-found my early calling training to be a psychotherapist. I have been in this field for over 25 years and love it as much as ever and can happily report no heads have required removal!<br>I feel hugely privileged to accompany someone as they embark upon a path of Self discovery gaining understanding of who they are and answering questions about why they think, feel and act in certain ways. Being a part of someone's transformational journey is always a wonderful and unique experience. I believe it is this uniqueness, of mind, body and spirit that calls for an holistic and integrative approach to health, one size does not fit all. I am so delighted to be part of this initiative to create the conditions in which we can all reach our potential and flourish as human beings.</x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="annette">
            <x-slot:className>
                annette
            </x-slot>

            <x-slot:fullName>
                Annette Russell, MA
            </x-slot>

            <x-slot:bio>Sun conjunct Mars conjunct Venus in the 9th House in Cancer; Moon conjunct Pluto conjunct Uranus in the 12th House in Virgo square Mercury in Gemini in the 9th House; Libra ascendant.<br>Having revealed that much, I might as well add that I’m a biblioholic: happiest when living between the covers of a book — preferably one that is hardbound and gorgeously illustrated! When confronted by a blank page, however, I’m equally happy to provide my own text and daydreams. Indeed, I’ve heard homeopathy defines health as the freedom to express creativity; having experienced the healing of a chronic illness through Creative Writing for Therapeutic Purposes, I now see every new page as an opportunity for creating health. In the nonfictional world, I teach, translate, proofread, write and edit, and have several years’ experience in the set-up and management of private medical practices in Germany. </x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="emily">
            <x-slot:className>
                emily
            </x-slot>

            <x-slot:fullName>
                Emily Godfrey
            </x-slot>

            <x-slot:bio>Awaiting text.</x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="anaïs">
            <x-slot:className>
                anaïs
            </x-slot>

            <x-slot:fullName>
                Anaïs Russell
            </x-slot>

            <x-slot:bio>My BA is in Philosophy, Psychology and History of Science from the University of Leeds. By day I have a full-time IT job, and pursue my other passions in my spare time: homeopathy at The School of Health, and  martial arts. I love long walks in our local woods and nature reserves, and hiking through the Dales or Peak District with my wolfdog. <br>I am grateful to have this opportunity of supporting Create My Health CIC and the People’s Health Alliance with my IT skills and deep interest in all matters pertaining to health.</x-slot>
        </x-director-profile-bio>
    </div>

    <div class="grid gap-3 lg:gap-4 md:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 px-3 md:px-5 sm:px-4">

        <x-director-profile-panel class="from-liz_profile_bg1 to-liz_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/liz.jpeg" alt="Elizabeth Cooper">
            </x-slot>

            <x-slot:name>Liz Cooper</x-slot>

            <x-slot:roles>Co-founder, Director, Nutritional Therapist, HeartMath, Forest Therapy</x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-mel_profile_bg1 to-mel_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full max-h-full w-48 min-w-[12rem] object-fill rounded-tl-md  rounded-bl-md" src="/storage/images/mel.jpeg" alt="Mel Lagan">
            </x-slot>

            <x-slot:name>Mel Lagan</x-slot>

            <x-slot:roles>Co-founder, Director, Nurse, Reflexology, HeartMath, Bach Flower Essences, Earthing</x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-sarah_profile_bg1 to-sarah_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/sarah.jpeg" alt="Sarah Elder">
            </x-slot>

            <x-slot:name>Sarah Elder</x-slot>

            <x-slot:roles>Co-founder, Director, Psychotherapist</x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-netty_profile_bg1 to-netty_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/annette.jpeg" alt="Annette Russell">
            </x-slot>

            <x-slot:name>Annette Russell, MA</x-slot>

            <x-slot:roles>Co-founder, Director</x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-emily_profile_bg1 to-emily_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/emily.jpeg" alt="Emily Godfrey">
            </x-slot>

            <x-slot:name>Emily Godfrey</x-slot>

            <x-slot:roles>Co-founder, Director</x-slot>
        </x-director-profile-panel>

        <x-director-profile-panel class="from-anais_profile_bg1 to-anais_profile_bg2">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/anais.jpeg" alt="Anaïs Russell">
            </x-slot>

            <x-slot:name>Anaïs Russell</x-slot>

            <x-slot:roles>IT support and administration, Lethal martial-arts koala</x-slot>
        </x-director-profile-panel>

    </div>

    <x-button>
        <x-slot:text>Support us</x-slot>
    </x-button>
</div>

@endsection

<script type="text/javascript" defer>

    const togglePopup = (director) => {
        var className = director.split(' ')[0].toLowerCase()

        var elProfileBg = document.querySelector(".profile-popup-bg")
        elProfileBg.classList.toggle('hidden')
        elProfileBg.classList.toggle('fixed')

        var elBlurb = document.querySelector("." + className)
        elBlurb.classList.toggle('hidden')
        elBlurb.classList.toggle('relative')
    }

</script>