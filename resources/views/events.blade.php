@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24 min-h-screen">
    <div>
        <img class="w-full" src="/storage/images/events.jpeg" alt="Events image">
    </div>

    <h1 class="font-serif text-3xl text-center my-8">Events</span></h1>

    <div class="top-0 left-0 w-full h-full hidden profile-popup-bg z-40 bg-black opacity-95 origin-center animate-open-bio-bg">
        <x-director-profile-bio class="four">
            <x-slot:className>
                four
            </x-slot>

            <x-slot:fullName>
                Four Health Fridays
            </x-slot>

            <x-slot:bio>
                <p class="px-6 py-3 leading-loose">Four summer-sun Fridays at Clifford Community Sports Ground dedicated to all things health. You will be hosted by expert practitioners who will give talks (and taster sessions!) on how specific health modalities empower each of us in learning how to create and sustain our own health. These events are four opportunities to dive deeper into your personal health journey and get to know us friendly folks at our community hub!<br>
                The timetable below is not yet set in stone. Please check back closer to the relevant date to see the final version.</p>
                <div class="bg-lmhlMain1 w-11/12 mx-auto max-h-45% overflow-y-scroll opacity-100 mt-2">
                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold"><span class="tracking-widest">EMOTIONAL FRIDAY</span> 30 June</th>
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
                                AROMATHERAPY: Essential Oils for Wellbeing — relaxation & stress relief + make your own bespoke bath salts with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                <span class="text-slate-400"><em>Lindsey, modality tbc</em></span>
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:30–12:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MINI-MASSAGE: 15 minute taster sessions with Romina (drop in basis)
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
                                AROMATHERAPY: Essential Oils for Wellbeing — relaxation & stress relief + make your own bespoke bath salts with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                13:00–14:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                GROUNDING FOR HEALTH with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15 minute taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–15:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                MINI STRESS WORKSHOP: HeartMath & self-help techniques with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                15:30–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                BACH FLOWER REMEDIES for fear and uncertainty, with Mel
                            </td>
                        </tr>
                    </table>

                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold"><span class="tracking-widest">PHYSICAL FRIDAY</span> 07 July</th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                INDIAN HEAD MASSAGE: 15 minute taster sessions with Romina (drop in basis)
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
                                NUTRITION: Talk followed by informal Q&A with Helen
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: Talk followed by informal Q&A with Helen
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
                                13:00–14:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                HEALTH CAFÉ: lifestyle factors, reduce inflammation with Mel
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                14:00–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15 minute taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                15:00–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                TOXICITY QUIZ & DETOX FOR HOME with Mel
                            </td>
                        </tr>
                    </table>

                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold"><span class="tracking-widest">EMOTIONAL FRIDAY</span> 14 July</th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–10:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: Stress and resilience. Talk by Liz
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–11:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                AROMATHERAPY: Essential Oils for Wellbeing — mood boosters! + make your own bespoke bath salts with Emily
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–12:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                HEART-MATH with Liz
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:30–12:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: Talk followed by informal Q&A with Helen
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:30–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: Talk by Helen
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                12:00–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REIKI: 20 minute taster sessions with Rosalind (drop in basis)
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
                                REFLEXOLOGY: 15 minute taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                15:30–16:30
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: Stress & Resilience. Talk by Liz
                            </td>
                        </tr>
                    </table>

                    <table class="w-full border-collapse border border-lmhlHighlight5 text-lmhlBg1 text-left text-xs mb-4">
                        <tr>
                            <th class="border border-lmhlHighlight5 p-2 w-[15%]">Time</th>
                            <th class="border border-lmhlHighlight5 p-2 w-[85%] font-extrabold"><span class="tracking-widest">PHYSICAL FRIDAY</span> 21 July</th>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                09:30–11:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                NUTRITION: Gut health, vagus nerve and mycotoxins: 3 key factors that may be holding back your health! Talk by Liz
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                10:30–16:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                REFLEXOLOGY: 15 minute taster sessions with Kate (drop in basis)
                            </td>
                        </tr>
                        <tr class="border border-lmhlHighlight5 p-2">
                            <td class="border border-lmhlHighlight5 p-2">
                                11:00–13:00
                            </td>
                            <td class="border border-lmhlHighlight5 p-2">
                                PILATES with Lindsey
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

    <div class="grid gap-3 lg:gap-12 xl:gap-4 md:gap-6 grid-cols-1 md:grid-cols-2 xl:grid-cols-3 px-3 md:px-5 sm:px-4">
        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-fill" src="/storage/images/CMH_4_Fridays.svg" alt="Open day poster">
            </x-slot>

            <x-slot:name>Four Health Fridays</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2">Four consecutive Fridays starting 30 June 2023</p>
                <p class="text-xs font-sans mb-2">All day starting 09:30</p>
                <p class="text-xs font-sans mb-2">Clifford Community Sports Ground, Rhodes Lane, LS23 6LQ
                    </p>
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