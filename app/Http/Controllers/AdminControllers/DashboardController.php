<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sponsor;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {

        $posts_count              = Post::count();
        $posts_published_count    = Post::published()->count();
        $pending_posts_count      = Post::where('is_published', false)->count();

        $videos_count             = Video::count();
        $videos_published_count   = Video::published()->count();

        $categories_count         = Category::count();
        $categories_active_count  = Category::where('is_active', true)->count();

        $sponsors_count           = Sponsor::count();
        $sponsors_active_count    = Sponsor::where('is_active', true)->count();

        $today_posts_count        = Post::published()->whereDate('published_at', today())->count();
        $today_videos_count       = Video::published()->whereDate('published_at', today())->count();
        $today_publications_count = $today_posts_count + $today_videos_count;

        return view('admin.dashboard', compact(
            'posts_count','posts_published_count','pending_posts_count',
            'videos_count','videos_published_count',
            'categories_count','categories_active_count',
            'sponsors_count','sponsors_active_count',
            'today_posts_count','today_videos_count','today_publications_count'
        ));
    }
}
