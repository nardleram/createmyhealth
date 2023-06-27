<?php

namespace App\Actions\Events;

use App\Models\Event;
use Illuminate\Http\Request;

class UpdateEvent
{
    public function handle(Request $request): void
    {
        $event = Event::where('id', $request->id)->get()->first();
        
        $event->update([
            'title' => $request->title,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'info' => $request->info,
            'details' => $request->details
        ]);
    }
}