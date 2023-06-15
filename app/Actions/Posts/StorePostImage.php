<?php

namespace App\Actions\Posts;

use App\Models\PostImage;
use Illuminate\Http\Request;

class StorePostImage
{
    public function handle(Request $request): string
    {
        $image = $request['image']->store('images/posts', 'public');

        PostImage::create([
            'post_id' => $request->post_id,
            'url' => '/storage/'.$image,
            'size' => 'l'
        ]);

        return $image;
    }
}