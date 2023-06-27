<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Actions\Posts\StorePost;
use App\Http\Requests\PostRequest;
use App\Actions\Categories\StorePostCategories;
use App\Actions\Categories\UpdatePostCategories;
use App\Actions\Posts\UpdatePost;
use App\Models\CategoryPost;

class PostController extends Controller
{
    public function __construct(
        private StorePost $storePost,
        private StorePostCategories $storePostCats,
        private UpdatePost $updatePost,
        private UpdatePostCategories $updatePostCats
    ) {}

    public function index()
    {
        return view('posts.index')->with([
            'posts' => Post::with('categories')->get()
        ]);
    }

    public function test()
    {
        return Inertia::render('Test', [
            'categories' => Category::all(),
            'success' => null,
            'error' => null
        ]);
    }

    public function create()
    {
        return Inertia::render('AddPost', [
            'categories' => Category::all(),
            'success' => null,
            'error' => null
        ]);
    }

    public function store(PostRequest $request)
    {
        $post = $this->storePost->handle($request);

        if (count($request->cats) > 0) {
            $this->storePostCats->handle($request, $post);
        }

        return view('posts.index')->with([
            'posts' => Post::with('categories')->get(),
            'success' => 'Post added successfully!'
        ]);
    }

    public function edit(Post $post)
    {
        return Inertia::render('EditPost', [
            'post' => Post::where('id', $post->id)->first(),
            'categories' => Category::all(),
            'checkedCats' => CategoryPost::where('post_id', $post->id)->get(),
            'success' => null,
            'error' => null
        ]);
    }

    public function update(Request $request)
    {
        $post = $this->updatePost->handle($request);

        $this->updatePostCats->handle($request, $post);

        return view('posts.index')->with([
            'posts' => Post::with('categories')->get(),
            'success' => 'Post updated successfully!'
        ]);
    }

    public function destroy(Post $post)
    {
        Image::where('imageable_id', $post->id)
            ->where('imageable_type', 'App\\Models\\Post')
            ->delete();

        $post->delete();

        return view('posts.index')->with([
            'posts' => Post::with('categories')->get(),
            'success' => 'Post deleted successfully!'
        ]);
    }
}
