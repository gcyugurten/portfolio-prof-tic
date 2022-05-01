<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::paginate(12);
        return view('blog', compact('posts'));
    }

    public function show_article($slug) {
        $post = Post::where('slug', $slug)->first();

        if(Cookie::get($post->id) == ''){
            Cookie::queue("$post->id", '1', 3600);
            $post->incrementReadCount();
        }

        return view('article', compact("post"));

        
    }
}
