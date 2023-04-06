@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24 min-h-screen">
    <div>
        <img class="w-full" src="/storage/images/events.jpeg" alt="Events image">
    </div>

    <h1 class="font-serif text-3xl text-center mt-8">Events</span></h1>

    <div class="top-0 left-0 w-full h-full hidden profile-popup-bg z-40 bg-black opacity-95 origin-center animate-open-bio-bg">
        <x-director-profile-bio class="create">
            <x-slot:className>
                create
            </x-slot>

            <x-slot:fullName>
                Create My Health Open Day
            </x-slot>

            <x-slot:bio><strong>Our inaugural Open Day! This is our opportunity to introduce ourselves and our vision for a more organic and <em>human</em> health-care provision – for the people and by the people – to you. As a proud member of the <a href="https://the-pha.org/" class="font-semibold text-lmhlHighlight3 hover:text-lmhlHighlight4" target="_blank" rel="noopener noreferrer transition-colors delay-100 duration-250">People’s Health Alliance</a>, we share its ambitions and hopes for a healthier tomorrow, for everyone. Come in and meet us, chat with us, and learn more about our plans. 
            </x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="emergency">
            <x-slot:className>
                emergency
            </x-slot>

            <x-slot:fullName>
                Emergency First Aid at Work, Level 3
            </x-slot>

            <x-slot:bio><strong>The QA Level 3 Award in Emergency at Work (RFQ)</strong> qualification is designed for individuals who wish to take on the role of an emergency first aider in their workplace. Successful course completion  equips candidates with the skills required to give safe, prompt and effective first aid in an emergency situation.<br>
            <a href="https://www.ecclesallfirstaidtraining.co.uk/Emergencyfirstaid" class="font-semibold text-lmhlHighlight3 hover:text-lmhlHighlight4" target="_blank" rel="noopener noreferrer transition-colors delay-100 duration-250">Visit company website</a> 
            </x-slot>
        </x-director-profile-bio>

        <x-director-profile-bio class="more">
            <x-slot:className>
                more
            </x-slot>

            <x-slot:fullName>
                More events in the works!
            </x-slot>

            <x-slot:bio>Behind the scenes, the directors at Create My Health CIC are working with noble dilligence and a not insubstantial amount of guile on events designed to help the good people of Leeds create their way ever closer to their optimal health. Yes, events are in that productive pipeline, each one drawing closer by the day. Rest assured, Create My Health’s directors will inform you in a prompt and timely manner. You won’t miss a single one!
            </x-slot>
        </x-director-profile-bio>
    </div>

    <div class="grid gap-3 lg:gap-4 md:gap-6 grid-cols-1 md:grid-cols-2 px-3 md:px-5 sm:px-4 mt-4">
        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-cover" src="/storage/images/openDay.png" alt="Open day poster">
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
                <img class="mb-0 min-h-full rounded-tl-md object-cover" src="/storage/images/firstAiderCourse.png" alt="First-aider course poster">
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

        var elProfileBg = document.querySelector(".profile-popup-bg")
        elProfileBg.classList.toggle('hidden')
        elProfileBg.classList.toggle('fixed')

        var elBlurb = document.querySelector("." + className)
        elBlurb.classList.toggle('hidden')
        elBlurb.classList.toggle('relative')
    }

</script>