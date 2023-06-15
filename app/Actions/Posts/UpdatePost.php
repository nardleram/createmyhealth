<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdatePost
{
    public function handle(Request $request): Post
    {
        $post = Post::where('id', $request->post_id)->first();

        $post->update([
            'title' => $post->title,
            'slug' => $post->slug,
            'body' => $request->body,
            'first_200' => strip_tags(substr($request->body, 0, 199)),
            'author' => $request->author
        ]);

        return Post::where('id', $request->post_id)->first();
    }
}