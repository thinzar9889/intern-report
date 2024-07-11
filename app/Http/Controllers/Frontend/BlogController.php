<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('frontend.blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFaiL($id);

        return view('frontend.blog.show', compact('blog'));
    }
}
