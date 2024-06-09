<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('blog/list', [
            'title' => 'Blog List',
            'posts' => $posts
        ]);
    }

    public function detail(Post $post)
    {
        // $post = Post::where('slug', $slug)->first();
        return view('blog/post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
