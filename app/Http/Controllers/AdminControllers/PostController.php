<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category','author')->latest('id')->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('posts', 'public');
        }
        $data['user_id'] = $request->user()->id;
        $data['slug'] = Str::slug($data['title']);

        Post::create($data);
        return redirect()->route('admin.posts.index')->with('success', 'Article créé.');
    }

    public function edit(Post $post)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.posts.edit', compact('post','categories'));
    }

    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
    
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('cover_image')) {
            if ($post->cover_image) Storage::disk('public')->delete($post->cover_image);
            $data['cover_image'] = $request->file('cover_image')->store('posts', 'public');
        }
        $data['slug'] = Str::slug($data['title']);

        $post->update($data);
        return redirect()->route('admin.posts.index')->with('success', 'Article mis à jour.');
    }

    public function destroy(Post $post)
    {
        if ($post->cover_image) Storage::disk('public')->delete($post->cover_image);
        $post->delete();
        return back()->with('success', 'Article supprimé.');
    }
}
