<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoController extends Controller
{
   public function index()
    {
        $videos = Video::with('category','author')->latest('id')->paginate(20);
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.videos.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'video_url' => 'required|url',
            'thumbnail' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('videos', 'public');
        }
        $data['user_id'] = $request->user()->id;
        $data['slug'] = Str::slug($data['title']);

        Video::create($data);
        return redirect()->route('admin.videos.index')->with('success', 'Vidéo créée.');
    }

     public function show(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.videos.edit', compact('video','categories'));
    }

    public function update(Request $request, Video $video)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'video_url' => 'required|url',
            'thumbnail' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($video->thumbnail) Storage::disk('public')->delete($video->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('videos', 'public');
        }
        $data['slug'] = Str::slug($data['title']);

        $video->update($data);
        return redirect()->route('admin.videos.index')->with('success', 'Vidéo mise à jour.');
    }

    public function destroy(Video $video)
    {
        if ($video->thumbnail) Storage::disk('public')->delete($video->thumbnail);
        $video->delete();
        return back()->with('success', 'Vidéo supprimée.');
    }
}
