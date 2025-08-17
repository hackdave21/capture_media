<?php

use App\Http\Controllers\AdminControllers\AdminAuthController;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\SiteControllers\CategoryController;
use App\Http\Controllers\SiteControllers\HomeController;
use App\Http\Controllers\SiteControllers\PostController;
use App\Http\Controllers\SiteControllers\SearchController;
use App\Http\Controllers\SiteControllers\VideoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Admin Auth
Route::prefix('admin')->as('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/loginview', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.attempt');
    });
    Route::post('/logout', [AdminAuthController::class, 'logout'])
        ->name('logout')
        ->middleware('auth');
});

// Admin protégé
Route::middleware(['auth','is_admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::resource('categories', App\Http\Controllers\AdminControllers\CategoryController::class);
    Route::resource('posts', App\Http\Controllers\AdminControllers\PostController::class);
    Route::resource('videos', App\Http\Controllers\AdminControllers\VideoController::class);
    Route::resource('sponsors', App\Http\Controllers\AdminControllers\SponsorController::class);
});

// Site
Route::get('/', HomeController::class)->name('home');
Route::get('/articles', [PostController::class, 'index'])->name('posts.index');
Route::get('/article/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/video/{slug}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/categorie/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/recherche',SearchController::class)->name('search');


