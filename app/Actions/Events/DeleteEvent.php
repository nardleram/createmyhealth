<?php

namespace App\Actions\Events;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class DeleteEvent
{
    public function handle(Event $event): void
    {
        $image = Image::where('imageable_id', $event->id)
            ->where('imageable_type', 'App\\Models\\Event')
            ->first();

        File::delete(public_path('/storage/'.$image->url));

        $image->delete();

        $event->delete();
    }
}