<?php

namespace App\Http\Controllers;

use Wink\WinkPage;
use Wink\WinkPost;

class WebController extends Controller
{
    public function index()
    {
        $page = WinkPage::whereSlug('index')
            ->firstOrFail();

        return view('index', compact('page'));
    }

    public function posts()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(1);

        return view('posts.index', compact('posts'));
    }

    public function post($slug)
    {
        $post = WinkPost::with('tags')
            ->whereSlug($slug)
            ->live()
            ->firstOrFail();

        return view('posts.show', compact('post'));
    }

    public function page($slug)
    {
        $page = WinkPage::whereSlug($slug)
            ->firstOrFail();

        return view('pages.show', compact('page'));
    }
}
