<?php

namespace App\Http\Controllers;

use App\Models\Wink;
use Wink\WinkPost;

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
        $blogs = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);

        return view('blog')->with([
            'blogs' => $blogs,
        ]);
    }

    public function show($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('single-post', [
            'post' => $post
        ]);
    }
}
