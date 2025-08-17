<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Sponsor;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('site.index', [
            'latest_posts' => Post::published()->latest('published_at')->take(6)->get(),
            'latest_videos' => Video::published()->latest('published_at')->take(6)->get(),
            'sponsors' => Sponsor::where('is_active', true)->latest('id')->get(),
        ]);
    }
}
