<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function show(string $slug)
    {
        $category = Category::where('slug', $slug)->where('is_active', true)->firstOrFail();
       $posts  = $category->posts()->published()->latest('published_at')->paginate(12, ['*'], 'page');
       $videos = $category->videos()->published()->latest('published_at')->paginate(12, ['*'], 'videos_page');
        return view('site.category', compact('category','posts','videos'));
    }
}
