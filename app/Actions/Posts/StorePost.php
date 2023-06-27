<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Traits\HelperFunctions;

class StorePost
{
    use HelperFunctions;

    public function handle($request = null): Post
    {
        if (!$request) {
            return Post::create([
                'title' => 'Dummy Title',
                'slug' => 'dummy_title',
                'body' => 'Dummy text',
                'first_200', 'First 200 characters will go here',
                'author' => 'Alan Smithee'
            ]);
        }

        if ($request->post_id > 0) {
            $post = Post::where('id', $request->post_id)->first();

            $request->slug !== 'none'
            ? $slug = $request->slug
            : $slug = Str::slug($request->title, '-').'-'.md5($this->getRandomString(6));

            $post->update([
                'title' => $request->title,
                'slug' => $slug,
                'body' => $request->body,
                'first_200' => strip_tags(substr($request->body, 0, 199)),
                'author' => $request->author
            ]);

            return Post::where('id', $request->post_id)->first();
        }

        return Post::create([
            'first_200' => strip_tags(substr($request->body, 0, 199)),
            'body' => $request->body,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-').'-'.md5($this->getRandomString(6)),
            'author' => $request->author
        ]);
    }
}