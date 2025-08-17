<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::published()->latest('published_at')->paginate(12);
        return view('site.videos.index', compact('videos'));
    }

    public function show(string $slug)
    {
        $video = Video::published()->where('slug', $slug)->firstOrFail();
        return view('site.videos.show', compact('video'));
    }
}
