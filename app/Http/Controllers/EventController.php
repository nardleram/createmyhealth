<?php

namespace App\Http\Controllers;

use App\Actions\Events\DeleteEvent;
use Inertia\Inertia;
use App\Models\Event;
use App\Actions\Events\StoreEvent;
use App\Actions\Events\UpdateEvent;
use App\Http\Requests\EventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    public function __construct(
        protected StoreEvent $storeEvent,
        protected UpdateEvent $updateEvent,
        protected DeleteEvent $deleteEvent
    ) {}

    public function index()
    {
        return Inertia::render('events/Index', [
            'events' => Event::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('events/AddEvent');
    }

    public function store(EventRequest $request)
    {
        $this->storeEvent->handle($request);

        return to_route('events')->with([
            'success' => 'Event added succesfully'
        ]);
    }

    public function edit(Event $event)
    {
        return Inertia::render('events/EditEvent', [
            'event' => Event::where('id', $event->id)->with('images')->first()
        ]);
    }

    public function update(UpdateEventRequest $request)
    {
        $this->updateEvent->handle($request);

        return to_route('events')->with([
            'success' => 'Event updated succesfully'
        ]);
    }

    public function destroy(Event $event)
    {
        $this->deleteEvent->handle($event);

        return to_route('events')->with([
            'success' => 'Event deleted succesfully'
        ]);
    }
}
