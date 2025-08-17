<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
    {
        $posts = Post::published()->latest('published_at')->paginate(12);
        return view('site.posts.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        return view('site.posts.show', compact('post'));
    }
}
