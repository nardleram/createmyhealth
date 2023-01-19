@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24">
    <div>
        <img class="w-full" src="/storage/images/calum-lewis-we_are.jpeg" alt="We are image">
    </div>

    <h1 class="font-serif text-5xl text-center mt-12 mb-6 text-lmhlPanel">We are...</h1>

    <div class="grid gap-3 lg:gap-4 md:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 px-3 md:px-5 sm:px-4">
        <div id="Mel" class="mt-5 rounded-md shadow-md bg-lmhlPanel1">
            <div class="w-full h-56 flex flex-row rounded-t-md font-serif bg-gradient-to-b from-mel_profile_bg1 to-mel_profile_bg2">
                <div class="mr-4 h-56">
                    <img class="mb-0 min-h-full max-h-full w-48 min-w-[12rem] object-fill rounded-tl-md" src="/storage/images/mel.jpeg" alt="">
                </div>
                <div class="pt-4 min-h-full pr-3">
                    <h4 class="text-lg leading-tight mb-2 tracking-tight text-lmhlPanel">Mel Lagan</h4>
                    <h5 class="leading-tight">Co-founder, Director, Nurse, Reflexology, HeartMath, Bach Flower Essences</h5>
                </div>
            </div>

            <div class="text-lmhlBg1 rounded-b-md">
                <p class="text-sm text-lmhlBg1 p-3 leading-relaxed rounded-b-md">My nursing background is mainly in renal medicine caring for patients with chronic kidney disease. As a holistic therapist, I help people re-establish physical, emotional and mental balance and well-being, drawing on a number of modalities including classic reflexology, RLD (reflexology lymph drainage) and Bach Flower Essences.  I coach people to help them reframe stress and anxiety, recognise unhelpful thought patterns and behaviours and develop resilience in the face of life’s challenges. I am passionate about empowering my clients through education and knowledge sharing  so they can begin to take charge of their own health and make lifestyle decisions that will support their well-being.</p>
            </div>
        </div>

        <div id="Sarah" class="mt-5 rounded-md shadow-md bg-lmhlPanel2">
            <div class="w-full h-56 flex flex-row rounded-t-md font-serif bg-gradient-to-b from-sarah_profile_bg1 to-sarah_profile_bg2">
                <div class="mr-4">
                    <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill" src="/storage/images/sarah.jpeg" alt="">
                </div>
                <div class="pt-4 min-h-full pr-3">
                    <h4 class="text-lg leading-tight mb-2 tracking-tight text-lmhlPanel">Sarah Elder</h4>
                    <h5 class="leading-tight">Co-founder, Director</h5>
                </div>
            </div>

            <div class="text-lmhlBg1 rounded-b-md">
                <p class="text-sm text-lmhlBg1 p-3 leading-relaxed rounded-b-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil illo dolore quisquam porro incidunt odio delectus ullam saepe dolores inventore ipsum asperiores corrupti libero veniam aliquam, enim quam sint veritatis?</p>
            </div>
        </div>
            
        <div id="Liz" class="mt-5 rounded-md shadow-md bg-lmhlPanel3">
            <div class="w-full h-56 flex flex-row rounded-t-md font-serif bg-gradient-to-b from-liz_profile_bg1 to-liz_profile_bg2">
                <div class="mr-4">
                    <img class="mb-0 min-h-full rounded-tl-md w-40 object-fill" src="/storage/images/liz.jpeg" alt="">
                </div>
                <div class="pt-4 min-h-full pr-3">
                    <h4 class="text-lg leading-tight mb-2 tracking-tight text-lmhlPanel">Elizabeth Cooper</h4>
                    <h5 class="leading-tight">Co-founder, Director</h5>
                </div>
            </div>

            <div class="text-lmhlBg1 rounded-b-md">
                <p class="text-sm text-lmhlBg1 p-3 leading-relaxed rounded-b-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil illo dolore quisquam porro incidunt odio delectus ullam saepe dolores inventore ipsum asperiores corrupti libero veniam aliquam, enim quam sint veritatis?</p>
            </div>
        </div>

        <div id="Annette" class="mt-5 rounded-md shadow-md bg-lmhlPanel1">
            <div class="w-full h-56 flex flex-row rounded-t-md font-serif bg-gradient-to-b from-netty_profile_bg1 to-netty_profile_bg2">
                <div class="mr-4">
                    <img class="mb-0 min-h-full w-48 object-fill rounded-tl-md" src="/storage/images/annette.jpeg" alt="">
                </div>
                <div class="pt-4 min-h-full pr-3">
                    <h4 class="text-lg leading-tight mb-2 tracking-tight text-lmhlPanel">Annette Russell, MA</h4>
                    <h5 class="leading-tight">Co-founder, Director</h5>
                </div>
            </div>

            <div class="text-lmhlBg1 rounded-b-md">
                <p class="text-sm leading-relaxed px-6 pt-3 pb-1">I’m a biblioholic: happy when living between the covers of a book – preferably one that is hardbound and gorgeously illustrated! When confronted by a blank page, however, I’m equally happy to provide my own text and daydreams. Indeed, I hear homeopathy defines health as the freedom to express creativity; every blank page is an opportunity for creating health. In the nonfictional world, I teach, translate, proofread, write and edit, and have several years’ experience in the set-up and management of private medical practices in Germany.</p>
                
                <p class="text-sm  leading-relaxed px-6 pb-3 rounded-b-md">I am delighted to be on the team of Create My Health CIC and part of the People’s Health Alliance.</p>
            </div>
        </div>

        <div id="Emily" class="mt-5 rounded-md shadow-md bg-lmhlPanel2">
            <div class="w-full h-56 flex flex-row rounded-t-md font-serif bg-gradient-to-b from-emily_profile_bg1 to-emily_profile_bg2">
                <div class="mr-4">
                    <img class="mb-0 min-h-full rounded-tl-md w-40 object-fill" src="/storage/images/emily.jpeg" alt="">
                </div>
                <div class="pt-4 min-h-full pr-3">
                    <h4 class="text-lg leading-tight mb-2 tracking-tight text-lmhlPanel">Emily Godfrey</h4>
                    <h5 class="leading-tight">Co-founder, Director</h5>
                </div>
            </div>
            <div class="text-lmhlBg1 rounded-b-md">
                <p class="text-sm p-3 leading-relaxed rounded-b-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil illo dolore quisquam porro incidunt odio delectus ullam saepe dolores inventore ipsum asperiores corrupti libero veniam aliquam, enim quam sint veritatis?</p>
            </div>
        </div>

        <div id="Anais" class="mt-5 rounded-md shadow-md bg-lmhlPanel3">
            <div class="w-full h-56 flex flex-row rounded-t-md font-serif bg-gradient-to-b from-anais_profile_bg1 to-anais_profile_bg2">
                <div class="mr-4">
                    <img class="mb-0 min-h-full rounded-tl-md w-40 object-fill" src="/storage/images/anais.jpeg" alt="">
                </div>
                <div class="pt-4 min-h-full pr-3">
                    <h4 class="text-lg leading-tight mb-2 tracking-tight text-lmhlPanel">Anaïs Russell</h4>
                    <h5 class="leading-tight">Data control, IT support</h5>
                </div>
            </div>
            <div class="text-lmhlBg1 rounded-b-md">
                <p class="text-sm leading-relaxed px-6 pt-3 pb-1">My BA is in Philosophy, Psychology and History of Science from the University of Leeds. By day I have a full-time IT job, and pursue my other passions in my spare time: homeopathy at The School of Health, and  martial arts. I love long walks in our local woods and nature reserves, and hiking through the Dales or the Peak District with my wolfdog.</p>

                <p class="text-sm leading-relaxed px-6 pb-3">I am grateful to have this opportunity of supporting Create My Health CIC and the People’s Health Alliance with my IT skills and my deep interest in all matters pertaining to health.</p>
            </div>
        </div>
    </div>

    <div class="px-2 py-4 bg-lmhlHighlight1 text-lmhlBg1 text-lg tracking-tight font-bold rounded-lg shadow-md mt-10 w-1/3 text-center mx-auto">Support us</div>
</div>

@endsection