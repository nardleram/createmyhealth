<?php

namespace App\Actions\Categories;

use App\Models\Post;
use App\Models\CategoryPost;
use Illuminate\Http\Request;

class UpdatePostCategories
{
    public function handle(Request $request, Post $post): void
    {
        CategoryPost::where('post_id', $post->id)->delete();

        foreach($request->cats as $cat) {
            CategoryPost::create([
                'category_id' => $cat['id'],
                'post_id' => $post->id
            ]);
        }
    }
}