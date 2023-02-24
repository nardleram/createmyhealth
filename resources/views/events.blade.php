@extends('layouts.layout')

@section('content')

<div class="mb-16 mt-24 min-h-screen">
    <div>
        <img class="w-full" src="/storage/images/events.jpeg" alt="Events image">
    </div>

    <h1 class="font-serif text-3xl text-center mt-8">Events</span></h1>

    <div class="grid gap-3 lg:gap-4 md:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 px-3 md:px-5 sm:px-4">

        <x-director-profile-panel class="bg-white">
            <x-slot:profilepic>
                <img class="mb-0 min-h-full rounded-tl-md w-40 min-w-[10rem] object-fill rounded-bl-md" src="/storage/images/firstAiderCourse.png" alt="Elizabeth Cooper">
            </x-slot>

            <x-slot:name>Emergency First Aid at Work (Level 3)</x-slot>

            <x-slot:roles>Decsription goes here.</x-slot>
        </x-director-profile-panel>
    </div>
</div>

@endsection