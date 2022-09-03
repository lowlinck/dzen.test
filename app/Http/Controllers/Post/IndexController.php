<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $post = BlogPost::find(1);

        return view('post.index', compact('post'));
    }
}
