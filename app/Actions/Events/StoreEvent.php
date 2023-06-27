<?php

namespace App\Actions\Events;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Traits\HelperFunctions;

class StoreEvent
{
    use HelperFunctions;
    
    public function handle(Request $request): void
    {
        $event = Event::create([
            'title' => $request->title,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'info' => $request->info,
            'details' => $request->details,
            'classname' => $this->getRandomString(5)
        ]);

        $image = $request['image']->store('images/events', 'public');

        Image::create([
            'imageable_id' => $event->id,
            'imageable_type' => 'App\Models\Event',
            'url' => $image,
            'size' => 's',
        ]);
    }
}