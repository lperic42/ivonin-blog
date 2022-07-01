<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        // TODO -- Limit to 6 blog posts

        $featuredBlogs = Blog::all();

        return view('homepage')->with([
            'featuredBlogs' => $featuredBlogs,
        ]);
    }

    public function list() {
        $blogs = Blog::all();

        return view('blog')->with([
            'blogs' => $blogs,
        ]);
    }
}
