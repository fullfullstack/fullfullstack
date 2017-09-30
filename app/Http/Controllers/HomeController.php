<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();
        return view('home', compact('posts'));
    }

    public function post(Post $post)
    {
        return view('post', compact('post'));
    }
}
