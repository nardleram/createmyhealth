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
use App\Actions\Posts\DeletePost;
use App\Actions\Posts\UpdatePost;
use App\Models\CategoryPost;

class PostController extends Controller
{
    public function __construct(
        protected StorePost $storePost,
        protected StorePostCategories $storePostCats,
        protected UpdatePost $updatePost,
        protected UpdatePostCategories $updatePostCats,
        protected DeletePost $deletePost
    ) {}

    public function index()
    {
        return Inertia::render('posts/Index')->with([
            'posts' => Post::with('categories')->orderBy('created_at')->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('posts/AddPost', [
            'categories' => Category::all()
        ]);
    }

    public function store(PostRequest $request)
    {
        $post = $this->storePost->handle($request);

        if (count($request->cats) > 0) {
            $this->storePostCats->handle($request, $post);
        }

        return to_route('posts')->with([
            'success' => 'Post added successfully'
        ]);
    }

    public function edit(Post $post)
    {
        return Inertia::render('posts/EditPost', [
            'post' => Post::where('id', $post->id)->first(),
            'categories' => Category::all(),
            'checkedCats' => CategoryPost::where('post_id', $post->id)->get()
        ]);
    }

    public function update(Request $request)
    {
        $post = $this->updatePost->handle($request);

        $this->updatePostCats->handle($request, $post);

        return to_route('posts')->with([
            'success' => 'Post updated successfully'
        ]);
    }

    public function destroy(Post $post)
    {
        $this->deletePost->handle($post);

        return to_route('posts')->with([
            'success' => 'Post deleted successfully'
        ]);
    }
}
