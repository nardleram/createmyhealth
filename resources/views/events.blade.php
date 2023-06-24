@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24 min-h-screen">
    <div>
        <img class="w-full" src="/storage/images/events.jpeg" alt="Events image">
    </div>

    <h1 class="font-serif text-3xl text-center my-8">Events</span></h1>

    <div class="top-0 left-0 w-full h-full hidden profile-popup-bg z-40 bg-black opacity-95 origin-center animate-open-bio-bg">
        <x-director-profile-bio class="first">
            <x-slot:className>
                first
            </x-slot>

            <x-slot:fullName>
                First Health Friday
            </x-slot>

            <x-slot:bio>
                <p class="px-6 py-3 leading-loose">The first of our four summer-sun Fridays at Clifford Community Sports Ground is dedicated to emotional wellbeing. You will be hosted by expert practitioners who will give talks (and taster sessions!) on how essential to your health emotional wellbeing is. Of course it is not possible to separate emotional from physical wellbeing, but if we do want to create our own health, it does indeed help to get to know ourselves as well as we can. To this end, viewing our totality through a variety of lenses in the service of clarity and completeness is a time-honoured tradition.<br>
                <strong>All events are free, but donations are welcome! No bookings required.</strong>
                <div class="bg-lmhlMain1 w-11/12 mx-auto max-h-45% overflow-y-scroll opacity-100 mt-2">
                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold">30 June <span class="uppercase">Focus: Emotional Balance</span></th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–10:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                CACAO CIRCLE with Romina
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                AROMATHERAPY: <em>Essential oils for wellbeing — relaxation & stress relief</em>. Talk followed by workshop to make your own bespoke bath salts, with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:00–12:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MINI-MASSAGE: 15-min taster sessions with Romina (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                GROUNDING FOR HEALTH with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:30–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MEDITATION with Romina
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                13:00–14:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                AROMATHERAPY: <em>Essential oils for wellbeing — relaxation & stress relief</em>. Talk followed by workshop to make your own bespoke bath salts, with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–15:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MINI STRESS WORKSHOP: Emotional self-regulation technique (HEARTMATH) with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15-min taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                15:30–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                BACH FLOWER REMEDIES: <em>Emotional balance in times of fear and uncertainty</em>, with Mel
                            </td>
                        </tr>
                    </table>
                </div>
            </x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="four">
            <x-slot:className>
                four
            </x-slot>

            <x-slot:fullName>
                Four Health Fridays
            </x-slot>

            <x-slot:bio>
                <p class="px-6 py-3 leading-loose">Four summer-sun Fridays at Clifford Community Sports Ground dedicated to all things health. You will be hosted by expert practitioners who will give talks (and taster sessions!) on how specific health modalities empower each of us in learning how to create and sustain our own health. These events are four opportunities to dive deeper into your personal health journey and get to know us friendly folks at our community hub!<br>
                <strong>All events are free, but donations are welcome!</strong><br>
                <strong>Except for the two Psych-K Belief Change sessions on 14 July, NO bookings are required.</strong><br>
                The timetable below is not yet set in stone. Please check back closer to the relevant date to see the final version.</p>
                <div class="bg-lmhlMain1 w-11/12 mx-auto max-h-45% overflow-y-scroll opacity-100 mt-2">
                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold">30 June <span class="uppercase">Focus: Emotional Balance</span></th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–10:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                CACAO CIRCLE with Romina
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                AROMATHERAPY: <em>Essential oils for wellbeing — relaxation & stress relief</em>. Talk followed by workshop to make your own bespoke bath salts, with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:00–12:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MINI-MASSAGE: 15-min taster sessions with Romina (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                GROUNDING FOR HEALTH with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:30–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MEDITATION with Romina
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                13:00–14:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                AROMATHERAPY: <em>Essential oils for wellbeing — relaxation & stress relief</em>. Talk followed by workshop to make your own bespoke bath salts, with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–15:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MINI STRESS WORKSHOP: Emotional self-regulation technique (HEARTMATH) with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15-min taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                15:30–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                BACH FLOWER REMEDIES: <em>Emotional balance in times of fear and uncertainty</em>, with Mel
                            </td>
                        </tr>
                    </table>

                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold">07 July <span class="uppercase">Focus: Physical Health & Lifestyle</span></th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                INDIAN HEAD MASSAGE: 15-min taster sessions with Romina (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:00–11:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                GROUNDING to reduce pain & inflammation, with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:00–12:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: <em>The good, the bad, and the ugly</em>. Talk followed by informal Q&A with Helen
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION:  <em>The good, the bad, and the ugly</em>. Talk followed by informal Q&A with Helen
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                CACAO CIRCLE with Romina
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                13:00–14:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                HEALTH CAFÉ: lifestyle factors, reduce inflammation with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:30–16:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: Lymph drainage to aid toxin removal – 15-min taster sessions with Mel (drop in basis)
                            </td>
                        </tr>
                    </table>

                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold">14 July <span class="uppercase">Focus: Emotional Balance</span></th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–10:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: <em>Stress and resilience</em>. Talk by Liz
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–10:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                Psych-K Belief Change: An hour’s 1-on-1 session with Lindsey. (Please book your place by emailing us at createmyhealth@proton.me)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                Psych-K Belief Change: An hour’s 1-on-1 session with Lindsey. (Please book your place by emailing us at createmyhealth@proton.me)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                AROMATHERAPY: <em>Essential oils for wellbeing — mood boosters!</em> Talk followed by workshop to make your own bespoke bath salts, with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                Mini stress workshop: Emotional self-regulation technique (HEARTMATH) with Liz
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:30–12:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: <em>The good, the bad, and the ugly</em>. Talk followed by informal Q&A with Helen
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:30–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: <em>The good, the bad, and the ugly</em>. Talk by Helen
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–14:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                FOREST BATHING with Liz
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REIKI: 20-min taster sessions with Rosalind (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                13:00–14:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                HOME REMEDIES: Workshop with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–15:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15-min taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                15:30–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: <em>Stress & resilience</em>. Talk by Liz
                            </td>
                        </tr>
                    </table>

                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold">21 July <span class="uppercase">Focus: Physical Health & Lifestyle</span></th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–11:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: <em>Gut health, vagus nerve and mycotoxins: 3 key factors that may be holding back your health!</em> Talk by Liz
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–13:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15-min taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:00–12:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                Toxicity Quiz and detox form home with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                THAI CHI / QI GONG: An introduction! By John
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                13:00–14:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                PILATES with Lindsey
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                13:30–14:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                Chair massage, head, neck and shoulder – 15-min taster sessions with John
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:30–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15-min taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                16:00–18:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                <span class="text-slate-400"><em>Sarah, modality tbc</em></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </x-slot>
        </x-director-profile-bio>
        
        <x-director-profile-bio class="create">
            <x-slot:className>
                create
            </x-slot>

            <x-slot:fullName>
                Create My Health Open Day
            </x-slot>

            <x-slot:bio><p class="px-6 py-3 leading-loose">Our inaugural Open Day! This is our opportunity to introduce ourselves and our vision for a more organic and <em>human</em> health-care provision – for the people and by the people – to you. As a proud member of the <a href="https://the-pha.org/" class="font-semibold text-lmhlHighlight3 hover:text-lmhlHighlight4" target="_blank" rel="noopener noreferrer transition-colors delay-100 duration-250">People’s Health Alliance</a>, we share its ambitions and hopes for a healthier tomorrow, for everyone. Come in and meet us, chat with us, and learn more about our plans.</p>
            </x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="emergency">
            <x-slot:className>
                emergency
            </x-slot>

            <x-slot:fullName>
                Emergency First Aid at Work, Level 3
            </x-slot>

            <x-slot:bio><strong><p class="px-6 py-3 leading-loose">The QA Level 3 Award in Emergency at Work (RFQ)</strong> qualification is designed for individuals who wish to take on the role of an emergency first aider in their workplace. Successful course completion  equips candidates with the skills required to give safe, prompt and effective first aid in an emergency situation.<br>
            <a href="https://www.ecclesallfirstaidtraining.co.uk/Emergencyfirstaid" class="font-semibold text-lmhlHighlight3 hover:text-lmhlHighlight4" target="_blank" rel="noopener noreferrer transition-colors delay-100 duration-250">Visit company website</a></p>
            </x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="more">
            <x-slot:className>
                more
            </x-slot>

            <x-slot:fullName>
                More events in the works!
            </x-slot>

            <x-slot:bio><p class="px-6 py-3 leading-loose">Behind the scenes, the directors at Create My Health CIC are working with noble dilligence and a not insubstantial amount of guile on events designed to help the good people of Leeds create their way ever closer to their optimal health. Yes, events are in that productive pipeline, each one drawing closer by the day. Rest assured, Create My Health’s directors will inform you in a prompt and timely manner. You won’t miss a single one!</p>
            </x-slot>
        </x-director-profile-bio>
    </div>

    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-6 xl:grid-cols-3 xl:gap-4 px-3 md:px-5 sm:px-4">
        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-fill" src="/storage/images/CMH_4_Fridays_1.png" alt="1st Friday poster">
            </x-slot>

            <x-slot:name>First Health Friday</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2">First Health Friday, 30 June 2023</p>
                <p class="text-xs font-sans mb-2">All day starting 09:30</p>
                <p class="text-xs font-sans mb-2">Clifford Community Sports Ground, Rhodes Lane, LS23 6LQ</p>
            </x-slot>
        </x-event-card>
        
        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-fill" src="/storage/images/CMH_4_Fridays.png" alt="4 Fridays poster">
            </x-slot>

            <x-slot:name>Four Health Fridays</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2">Four consecutive Fridays starting 30 June 2023</p>
                <p class="text-xs font-sans mb-2">All day starting 09:30</p>
                <p class="text-xs font-sans mb-2">Clifford Community Sports Ground, Rhodes Lane, LS23 6LQ</p>
            </x-slot>
        </x-event-card>
        
        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-fill" src="/storage/images/openDay.png" alt="Open day poster">
            </x-slot>

            <x-slot:name>Create My Health Open Day</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2">Saturday 22 April 2023</p>
                <p class="text-xs font-sans mb-2">14:00 – 16:00</p>
                <p class="text-xs font-sans mb-2">Clifton Village Hall, Otley, LS21 2ES</p>
            </x-slot>
        </x-event-card>

        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-fill" src="/storage/images/firstAiderCourse.png" alt="First-aider course poster">
            </x-slot>

            <x-slot:name>Emergency First Aid at Work (Level 3)</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2">Wednesday 29 March 2023</p>
                <p class="text-xs font-sans mb-2">08:45 – 15:00</p>
                <p class="text-xs font-sans mb-2">Wetherby Town Hall, Market Place, Wetherby, LS22 6NE</p>
                <p class="text-xs font-sans mb-2">£48pp (with 12 participants)</p>
            </x-slot>
        </x-event-card>

        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-cover" src="/storage/images/ameen-fahmy-event.jpeg" alt="Event filler image">
            </x-slot>

            <x-slot:name>More events in the works!</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2">Dates to be confirmed</p>
                <p class="text-xs font-sans mb-2">Times to be confirmed</p>
                <p class="text-xs font-sans mb-2">Somewhere very pleasant indeed, West Yorkshire</p>
                <p class="text-xs font-sans mb-2">Prices as low as we can get them!</p>
            </x-slot>
        </x-event-card>
    </div>
</div>

@endsection

<script type="text/javascript" defer>

    const togglePopup = (event) => {
        var className = event.split(' ')[0].toLowerCase()
        console.log(className)

        var elProfileBg = document.querySelector(".profile-popup-bg")
        elProfileBg.classList.toggle('hidden')
        elProfileBg.classList.toggle('fixed')

        var elBlurb = document.querySelector("." + className)
        elBlurb.classList.toggle('hidden')
        elBlurb.classList.toggle('relative')
    }

</script>