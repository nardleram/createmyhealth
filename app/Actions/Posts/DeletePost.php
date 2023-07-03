<?php

namespace App\Actions\Posts;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class DeletePost
{
    public function handle(Post $post): void
    {
        $image = Image::where('imageable_id', $post->id)
            ->where('imageable_type', 'App\\Models\\Post')
            ->first();

        File::delete(public_path('/storage/'.$image->url));

        $image->delete();

        $post->delete();
    }
}