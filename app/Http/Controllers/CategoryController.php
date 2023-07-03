<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return Inertia::render('categories/Index')->with([
            'categories' => DB::table('categories')->orderBy('title')->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('categories/AddCat');
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-')
        ]);

        return to_route('categories')->with('success', 'Category added successfully');
    }

    public function edit(Category $category)
    {
        return Inertia::render('categories/EditCat')->with([
            'category' => Category::where('id', $category->id)->first()
        ]);
    }

    public function update(CategoryRequest $request)
    {
        $cat = Category::where('id', $request->id)->first();

        $cat->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-')
        ]);

        return to_route('categories')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        CategoryPost::where('category_id', $category->id)->delete();

        return to_route('categories')->with('success', 'Category deleted successfully');
    }
}
