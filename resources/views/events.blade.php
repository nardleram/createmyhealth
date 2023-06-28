@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24 min-h-screen">
    <div>
        <img class="w-full" src="/storage/images/events.jpeg" alt="Events image">
    </div>

    <h1 class="font-serif text-3xl text-center my-8">Events</span></h1>

    <div class="top-0 left-0 w-full h-full hidden profile-popup-bg z-40 bg-black opacity-95 origin-center animate-open-bio-bg">
        @foreach ($events as $event)
            <x-event-details class="{{ $event->classname }} details">
                <x-slot:className>
                    {{ $event->classname }}
                </x-slot>

                <x-slot:title>
                    {{ $event->title }}
                </x-slot>

                <x-slot:details>
                    <div class="text-lmhlBg1 detail-text">
                        {!! $event->details !!}
                    </div>
                </x-slot>
            </x-event-details>
        @endforeach

        <x-event-details class="more details">
            <x-slot:className>
                more
            </x-slot>

            <x-slot:title>
                More events in the works!
            </x-slot>

            <x-slot:details><p class="px-6 py-3 leading-loose">Behind the scenes, the directors at Create My Health CIC are working with noble dilligence and a not insubstantial amount of guile on events designed to help the good people of Leeds create their way ever closer to their optimal health. Yes, events are in that productive pipeline, each one drawing closer by the day. Rest assured, Create My Health’s directors will inform you in a prompt and timely manner. You won’t miss a single one!</p>
            </x-slot>
        </x-event-details>
    </div>

    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-6 xl:grid-cols-3 xl:gap-4 w-full px-2 md:px-5 sm:px-4">
        @foreach ($events as $event)
        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-fill" src="{{ $event->images->first()->url }}" alt="Event image">
            </x-slot>

            <x-slot:name>{{ $event->title }}</x-slot>
            <x-slot:className>{{ $event->classname }}</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2 text-slate-600">{{ $event->date }}</p>
                <p class="text-xs font-sans mb-2 text-slate-600">{{ $event->time }}</p>
                <p class="text-xs font-sans mb-2 text-slate-600">{{ $event->location }}</p>
                <p class="text-xs font-sans mb-2 text-slate-600">{{ $event->info }}</p>
            </x-slot>
        </x-event-card>
        @endforeach

        <x-event-card>
            <x-slot:image>
                <img class="mb-0 min-h-full rounded-tl-md object-fill" src="/storage/images/ameen-fahmy-event.jpeg" alt="Event filler image">
            </x-slot>

            <x-slot:name>More events in the works!</x-slot>
            <x-slot:className>more</x-slot>

            <x-slot:description>
                <p class="text-xs font-sans mb-2 text-slate-600">Dates to be confirmed</p>
                <p class="text-xs font-sans mb-2 text-slate-600">Times to be confirmed</p>
                <p class="text-xs font-sans mb-2 text-slate-600">Somewhere very pleasant indeed, West Yorkshire</p>
                <p class="text-xs font-sans mb-2 text-slate-600">Prices as low as we can get them!</p>
            </x-slot>
        </x-event-card>
    </div>
</div>

@endsection

<style scoped>
    .details {
        overflow-y: scroll;
    }
    .details, table {
        border-collapse: collapse;
        color: rgb(226, 226, 224);
        margin: 24px 0px;
        width: 100%;
    }
    .details, th:first-child {
        min-width: 81px;
    }
    .details, td:last-child, th:last-child {
        width: 90%;
    }
    .details, th, td {
        border: 1px solid rgb(173, 43, 110);
        vertical-align: center;
        box-sizing: border-box;
        position: relative;
        margin-bottom: 0;
    }
    .details, td > p {
        font-weight: 300;
        font-size: 14px;
        padding: 3px 3px;
    }
    .details, th > p {
        text-align: left;
        font-weight: 800;
        font-size: 12px;
        padding: 2px 3px;
    }
    .details, strong {
        font-weight: 700;
    }
    .details, td > p {
        font-weight: 400;
        font-size: 12px;
    }
    .details, a > strong {
        color: rgb(227 181 205);
    }
    .details, a:hover > strong {
        color: rgb(213 144 180);
    }
    .detail-text, div > p {
        margin-bottom: 5px;
        font-size: 14px;
    }
</style>

<script type="text/javascript" defer>

    const togglePopup = (event) => {
        var elProfileBg = document.querySelector(".profile-popup-bg")
        elProfileBg.classList.toggle('hidden')
        elProfileBg.classList.toggle('fixed')

        var elBlurb = document.querySelector("." + event)
        elBlurb.classList.toggle('hidden')
        elBlurb.classList.toggle('relative')
    }

</script>