<?php

namespace App\Actions\Posts;

use App\Models\Image;
use Illuminate\Http\Request;

class StorePostImage
{
    public function handle(Request $request): string
    {
        $image = $request['image']->store('images/posts', 'public');

        Image::create([
            'imageable_id' => $request->post_id,
            'imageable_type' => 'App\\Models\\Post',
            'url' => '/storage/'.$image,
            'size' => 'l'
        ]);

        return $image;
    }
}