<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $parents = Category::orderBy('name')->get();
        return view('admin.categories.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'boolean',
        ]);
        $data['slug'] = Str::slug($data['name']);
        Category::create($data);
        return redirect()->route('admin.categories.index')->with('success', 'Catégorie créée.');
    }

    public function edit(Category $category)
    {
        $parents = Category::where('id','!=',$category->id)->orderBy('name')->get();
        return view('admin.categories.edit', compact('category','parents'));
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,'.$category->id,
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'boolean',
        ]);
        $data['slug'] = Str::slug($data['name']);
        $category->update($data);
        return redirect()->route('admin.categories.index')->with('success', 'Catégorie mise à jour.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Catégorie supprimée.');
    }
}
