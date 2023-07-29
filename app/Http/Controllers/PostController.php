<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $data = [
            'posts' => Post::query()->get()
        ];
        return $data;
    }
    public function show($slug)
    {
        $post = Post::query()->where('slug', '=', $slug)->first();
        return $post;
    }
}
