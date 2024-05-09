<?php

namespace App\Actions\Events;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;

class UpdateEvent
{
    public function handle(Request $request): void
    {
        $event = Event::where('id', $request->id)->first();
        
        $event->update([
            'title' => $request->title,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'info' => $request->info,
            'details' => $request->details
        ]);

        if ($request['image']) {
            $imageFile = $request['image']->store('images/events', 'public');

            $image = Image::where('imageable_id', $event->id)->first();

            $image->update([
                'url' => $imageFile,
            ]);
        }
    }
}