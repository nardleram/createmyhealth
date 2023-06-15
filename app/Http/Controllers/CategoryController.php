<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index')->with([
            'categories' => DB::table('categories')->orderBy('title')->get()
        ]);
    }

    public function create()
    {
        return view('categories.add')->with([
            'success' => null,
            'error' => null
        ]);
    }

    public function store(Request $request)
    {
        Category::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-')
        ]);

        return redirect()->route('categories')->with('success', 'Category added successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories')->with('success', 'Category deleted successfully!');
    }
}
