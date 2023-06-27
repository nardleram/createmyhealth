@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-3xl min-w-[768px]">
    <div class="w-11/12 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Event management</h1>

        <div class="flex flex-row flex-wrap gap-4 w-full mx-auto items-center justify-start mb-3">
            @foreach ($events as $event)
            <div class="w-48% h-[255px] p-2 bg-lmhlBgInput border border-slate-300 rounded-md shadow-md">
                <div class="w-full flex flex-col items-start justify-between h-full">
                    <h1 class="text-lg text-center w-full my-2">{{ $event->title }}</h1>
                    
                    <small class="text-slate-600 mb-2">Date: {{ $event->date }}</small>

                    <small class="text-slate-600 mb-2">Time: {{ $event->time }}</small>

                    <small class="text-slate-600 mb-2">Location: {{ $event->location }}</small>

                    <small class="text-slate-600 mb-2">Additional info: {{ $event->info }}</small>

                    <div class="flex items-end justify-between w-full">
                        <div class="text-success-600 hover:text-success-700 cursor-pointer">
                            <a href="{{ route('editEvent', $event->id) }}"><x-icon name="pencil-square" outline /></a>
                        </div>

                        <div class="text-red-700 hover:text-red-800 cursor-pointer">
                            <form action="{{ route('deleteEvent', $event->id) }}" method="POST" class="m-0 -mb-1.5">
                                @csrf
                                @method('DELETE')
            
                                <button type="submit"><x-icon class="" name="trash" outline /></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="w-1/2 mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">
            <a href="{{ route('addEvent') }}" as="button"><p class="text-center">Add an event</p></a>
        </div>
    </div>
</div>

@endsection