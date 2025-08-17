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
        return view('admin.dashboard', [
            'posts_count' => Post::count(),
            'videos_count' => Video::count(),
            'categories_count' => Category::count(),
            'sponsors_count' => Sponsor::count(),
        ]);
    }
}
