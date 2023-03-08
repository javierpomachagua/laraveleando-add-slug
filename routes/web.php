<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', function () {
    $posts = Post::select(['id', 'title', 'image_path', 'description', 'slug', 'published_at'])
            ->orderByDesc('published_at')
            ->get();

    return view('posts', compact('posts'));
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', compact('post'));
});
