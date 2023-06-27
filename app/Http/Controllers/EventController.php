<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Actions\Events\StoreEvent;
use App\Actions\Events\UpdateEvent;
use App\Http\Requests\EventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    public function __construct(
        protected StoreEvent $storeEvent,
        protected UpdateEvent $updateEvent
    ) {}

    public function index()
    {
        return view('events.index')->with([
            'events' => Event::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('AddEvent', [
            'success' => null,
            'error' => null
        ]);
    }

    public function store(EventRequest $request)
    {
        $this->storeEvent->handle($request);

        return view('events.index')->with([
            'events' => Event::all(),
            'success' => 'Event added successfully!'
        ]);
    }

    public function edit(Event $event)
    {
        return Inertia::render('EditEvent', [
            'event' => Event::where('id', $event->id)->with('images')->first()
        ]);
    }

    public function update(UpdateEventRequest $request)
    {
        $this->updateEvent->handle($request);

        return view('events.index')->with([
            'events' => Event::all(),
            'success' => 'Event updated successfully!'
        ]);
    }

    public function destroy(Event $event)
    {
        Image::where('imageable_id', $event->id)
            ->where('imageable_type', 'App\\Models\\Event')
            ->delete();

        $event->delete();

        return view('events.index')->with([
            'events' => Event::all(),
            'success' => 'Event deleted successfully!'
        ]);
    }
}
