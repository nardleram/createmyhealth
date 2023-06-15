<?php

namespace App\Actions\Categories;

use App\Models\Post;
use App\Models\CategoryPost;
use Illuminate\Http\Request;

class StorePostCategories
{
    public function handle(Request $request, Post $post): void
    {
        foreach($request->cats as $cat) {
            CategoryPost::create([
                'category_id' => $cat['id'],
                'post_id' => $post->id
            ]);
        }
    }
}