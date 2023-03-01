@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24">
    <div>
        <img class="w-full" src="/storage/{{ $photo->name }}" alt="Landing image">
    </div>

    <div class="text-sm md:text-base p-6 md:p-10 lg:p-20 mb-5">
        <p class="md:leading-loose leading-relaxed text-justify mb-5">Create My Health CIC is committed to advancing a healthcare approach that shifts the paradigm from symptom management to actively co-creating health as a continuous and mindful way of being. To this end, our goal is to establish local-community health hubs throughout Leeds that offer integrated and holistic health care to all. These hubs will constitute a network that encourages, supports and empowers everyone to take responsibility for their health in a way that works for each individual.</p>
        <p class="md:leading-loose leading-relaxed text-justify">Create My Health is proud to be a member of the PHA (People’s Health Alliance).</p>
    </div>

    <div class="bg-lmhlMain1 text-lmhlBg1 text-sm md:text-base p-6 md:p-10 lg:p-20 mb-10">
        <p class="md:leading-loose leading-relaxed mb-5 text-justify">Most of us experience healthcare as reactive rather than pro-active. We have become accustomed to a medical system that manages symptoms without properly addressing root causes. Create My Health CIC is a people-led grassroots organisation that sees health as much more than symptom management. We know true health flourishes through an integrative approach that considers mind, body and spirit as an interdependent unity.</p>
        <p class="md:leading-loose leading-relaxed mb-5 text-justify">Create My Health endeavours to create a resilient and easy-to-access healthcare network, in which practitioners from different modalities understand each others’ approaches and expertise, thereby ensuring timely and appropriate cross-referral where needed. Moreover, we aim to inspire each individual to actively create their own health by sharing knowledge and experience through peer-support circles, wellbeing days, health ‘cafés’ and a myriad of other fun and informative outreach events.</p>
        <p class="md:leading-loose leading-relaxed text-justify">Create My Health firmly believes in inclusivity and equal access for all, and aims to provide products and services at reduced costs or free of charge, depending on each individual’s financial situation.</p>
    </div>

    <div class="grid gap-6 md:gap-4 grid-cols-1 md:grid-cols-2 px-2 sm:px-5">
        <div class="mt-5 rounded-md shadow-md bg-lmhlPanel1">
            <img class="w-full mb-0 object-cover h-56 rounded-t-md" src="/storage/images/sapling_principles.jpeg" alt="">
            <h4 class="text-center font-serif text-lmhlBg1 text-2xl my-4">Our principles</h4>
            <div class="text-sm text-lmhlBg1 px-5 pb-5 leading-tight font-light">
                <p class="mb-2">Treat everyone with dignity and respect</p>
                <p class="mb-2">Act always in the best interests of clients and colleagues</p>
                <p class="mb-2">Work collaboratively, communicate effectively</p>
                <p class="mb-2">Take responsibility for our actions</p>
                <p class="mb-2">Remember we are equals regardless of role</p>
                <p class="mb-2">Remain lawful</p>
                <p class="mb-2">Empower everyone to recognise their best choices</p>
                <p class="mb-2">Encourage everyone to own their health</p>
                <p class="mb-2">Commit to continuous self-improvement and learning</p>
                <p class="mb-2">Do our best for ourselves and others</p>
                <p class="mb-2">Embrace a natural and integrated approach</p>
                <p class="mb-2">Listen and respond to the needs of the community</p>
            </div>
        </div>

        <div class="mt-5 rounded-md shadow-md bg-lmhlPanel2">
            <img class="w-full mb-0 object-cover h-56 rounded-t-md" src="/storage/images/oak_practice.jpeg" alt="">
            <h4 class="text-center font-serif text-lmhlBg1 text-2xl my-4">Our practice</h4>
            <div class="text-sm text-lmhlBg1 px-5 pb-5 leading-tight font-light">
                <p class="mb-2">Wellbeing days</p>
                <p class="mb-2">Drop-in sessions</p>
                <p class="mb-2">Talks, workshops and classes</p>
                <p class="mb-2">Therapies and treatments</p>
                <p class="mb-2">Self-caring skills and empowerment</p>
                <p class="mb-2">Peer-support circles / health ‘cafés’</p>
                <p class="mb-2">Informal peer-group sessions focussing on specific wellbeing topics and needs</p>
                <p class="mb-2">Wide range of services through collaboration with therapists and practitioners</p>
                <p class="mb-2">Cooperation with local community organisations, health services and charities</p>
                <p class="mb-2">Health-care products for sale or free of charge</p>
                <p class="mb-2">Health-care equipment available on loan or gifted (to come)</p>
            </div>
        </div>
    </div>

    {{-- <x-button>
        <x-slot:text>Support us</x-slot>
    </x-button> --}}
</div>

@endsection