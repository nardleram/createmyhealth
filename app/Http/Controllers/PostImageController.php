<?php

namespace App\Http\Controllers;

use App\Actions\Posts\StorePost;
use App\Actions\Posts\StorePostImage;
use App\Http\Requests\PostImageRequest;

class PostImageController extends Controller
{
    public function __construct(
        private StorePost $storePost,
        private StorePostImage $storePostImage,
    ) {}
    
    public function store(PostImageRequest $request)
    {
        if ($request->post_id === 0) {
            $post = $this->storePost->handle();
        }

        $image = $this->storePostImage->handle($request);

        return redirect()->back()->with([
            'postImageData' => [session(['postImagePath' => env("APP_URL", "https://www.createmyhealth.org").'/storage/'.$image])],
            'postId' => $request->post_id === 0 ? $post->id : $request->post_id
        ]);
    }
}
