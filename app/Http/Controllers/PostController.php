<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
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
    public function user_posts(User $user)
    {
        return view('blog/list', [
            'title' => 'Blog Post by ' . $user->name,
            'posts' => $user->posts
        ]);
    }
    public function category_posts(PostCategory $post_category)
    {
        return view('blog/list', [
            'title' => 'Blog Post in category: ' . $post_category->name,
            'posts' => $post_category->posts
        ]);
    }
}
