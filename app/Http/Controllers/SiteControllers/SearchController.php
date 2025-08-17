<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $q = trim($request->get('q', ''));
        $posts = collect();
        $videos = collect();
        if ($q !== '') {
            $posts = Post::published()
                ->where(function($qq) use ($q) {
                    $qq->where('title','like',"%$q%")
                       ->orWhere('excerpt','like',"%$q%")
                       ->orWhere('body','like',"%$q%");
                })
                ->latest('published_at')->limit(20)->get();
            $videos = Video::published()
                ->where(function($qq) use ($q) {
                    $qq->where('title','like',"%$q%")
                       ->orWhere('description','like',"%$q%");
                })
                ->latest('published_at')->limit(20)->get();
        }
        return view('site.search', compact('q','posts','videos'));
    }
}
