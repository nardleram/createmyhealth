@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24">
    <h1 class="font-serif text-5xl text-center mt-12 mb-6 text-lmhlPanel">(Website under construction)</h1>
    <div>
        <img class="w-full" src="/storage/images/ameen-fahmy-landing.jpeg" alt="Landing image">
    </div>

    <div class="text-sm md:text-base p-6 md:p-10 lg:p-20 mb-5">
        <p class="md:leading-loose leading-relaxed text-justify mb-5">Create My Health CIC is dedicated to advancing a healthcare approach that shifts the paradigm from treating disease to actively co-creating health. Our goal is to establish local-community health hubs throughout Leeds that offer integrated and holistic health care to all. These hubs will constitute a network that encourages, supports and empowers everyone to take responsibility for their health in a way that works for them.</p>
        <p class="md:leading-loose leading-relaxed text-justify">Create My Health is proud to be a member of the PHA (People’s Health Alliance).</p>
    </div>

    <div class="bg-lmhlMain1 text-lmhlBg1 text-sm md:text-base p-6 md:p-10 lg:p-20 mb-10">
        <p class="md:leading-loose leading-relaxed mb-5 text-justify">Most of us experience healthcare as reactive rather than pro-active. We have become accustomed to a medical system that manages symptoms without really addressing their root causes. Create My Health CIC is a people-led grassroots organisation that sees health as much more than symptom management. We know true health flourishes through an integrative approach that considers mind, body and spirit in unity.</p>
        <p class="md:leading-loose leading-relaxed mb-5 text-justify">Create My Health CIC aims to create a resilient and easy-to-access healthcare network, in which practitioners from different modalities understand each others’ approaches and expertise, thereby ensuring timely and appropriate cross-referral when needed. Moreover, Create My Health endeavours to inspire each individual to actively create their own health by sharing knowledge and experience through peer-support circles, wellbeing days, health ‘cafés’ and a myriad of other fun and informative outreach events.</p>
        <p class="md:leading-loose leading-relaxed text-justify">Create My Health firmly believes in inclusivity and equal access for all, and aims to provide products and services at reduced costs or free of charge, depending on each individual’s financial situation.</p>
    </div>

    <div class="grid gap-6 md:gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 md:px-5">
        <div class="mt-5 rounded-md shadow-md bg-lmhlPanel1">
            <img class="w-full mb-0 object-cover h-56 rounded-t-md" src="/storage/images/herbal-tincture.webp" alt="">
            <h4 class="text-center font-serif text-lmhlBg1 text-2xl my-4">Our principles</h4>
            <div class="text-sm text-lmhlBg1 px-5 pb-5 leading-tight font-light">
                <p class="mb-2">Treat everyone with dignity and respect</p>
                <p class="mb-2">Act always in the best interests of clients and colleagues</p>
                <p class="mb-2">Work collaboratively, communicate effectively</p>
                <p class="mb-2">Take responsibility for our actions</p>
                <p class="mb-2">Remember we are equals regardless of role</p>
                <p class="mb-2">Remain lawful</p>
                <p class="mb-2">Empower everyone to make their best choices</p>
                <p class="mb-2">Encourage everyone to own their health</p>
                <p class="mb-2">Commit to continuous self-improvement and learning</p>
                <p class="mb-2">Do our best for ourselves and others</p>
                <p class="mb-2">Embrace a natural and integrated approach</p>
                <p class="mb-2">Listen and respond to the needs of the community</p>
            </div>
        </div>

        <div class="mt-5 rounded-md shadow-md bg-lmhlPanel2">
            <img class="w-full mb-0 object-cover h-56 rounded-t-md" src="/storage/images/Herbs101_Banner.jpeg" alt="">
            <h4 class="text-center font-serif text-lmhlBg1 text-2xl my-4">Holistic care</h4>
            <div class="text-sm text-lmhlBg1 px-5 pb-5 leading-tight font-light">
                <p class="mb-2">Wellbeing days</p>
                <p class="mb-2">Drop-in sessions</p>
                <p class="mb-2">Therapies & treatments</p>
                <p class="mb-2">Peer-support circles / health “cafés”</p>
                <p class="mb-2">Informal peer-group sessions focussing on specific wellbeing topics and needs</p>
                <p class="mb-2">Collaboration with qualified therapists and practitioners to offer a range of services</p>
                <p class="mb-2">Collaborate with and complement extant healthcare services in the area</p>
                <p class="mb-2">Work with other community organisations and charities in the area</p>
                <p class="mb-2">Sell or gift health-care products</p>
                <p class="mb-2">Lend or gift equipment</p>
            </div>
        </div>

        <div class="mt-5 rounded-md shadow-md bg-lmhlPanel3">
            <img class="w-full mb-0 object-cover h-56 rounded-t-md" src="/storage/images/tinctures2.jpeg" alt="">
            <h4 class="text-center font-serif text-lmhlBg1 text-2xl my-4">Knowledge sharing</h4>
            <div class="text-sm text-lmhlBg1 px-5 pb-5 leading-tight font-light">
                <p class="mb-2">Talks, workshops & classes</p>
                <p class="mb-2">Wellbeing & awareness events</p>
                <p class="mb-2">Self-caring skills and empowerment</p>
                <p class="mb-2">Drop-in sessions & classes</p>
                <p class="mb-2">Peer support circles / health “cafés”</p>
                <p class="mb-2">Informal peer-group sessions focussing on specific wellbeing topics and needs</p>
            </div>
        </div>
    </div>

    <x-button>
        <x-slot:text>Support us</x-slot>
    </x-button>
</div>

@endsection