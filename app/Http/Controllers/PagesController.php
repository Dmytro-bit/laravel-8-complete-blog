<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('recentPosts'));
    }

    public function about_us()
    {
        return view('about_us');
    }
}
