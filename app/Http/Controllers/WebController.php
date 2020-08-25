<?php

namespace App\Http\Controllers;

use Wink\WinkPage;
use Wink\WinkPost;

class WebController extends Controller
{
    public function index()
    {
        $page = WinkPage::whereSlug('inicio')
            ->firstOrFail();

        return view('index', compact('page'));
    }

    public function posts()
    {
        $page = WinkPage::whereSlug('publicaciones')
            ->first();

        $posts = WinkPost::live()
            ->orderBy('publish_date', 'DESC')
            ->get();

        return view('posts.index', compact('posts', 'page'));
    }

    public function post($slug)
    {
        $page = WinkPage::whereSlug($slug)
            ->first();

        if ($page) {
            return view('pages.show', compact('page'));
        }

        $post = WinkPost::with('tags')
            ->whereSlug($slug)
            ->live()
            ->firstOrFail();

        return view('posts.show', compact('post'));
    }
}
