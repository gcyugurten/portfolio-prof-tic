<?php

namespace App\Http\Controllers\Admin;

use Svg\Tag\Rect;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;

class BlogController extends Controller
{

    public function index() {
        $posts = Post::orderByDesc("id")->paginate(12);
        return view('admin.blog.index', compact('posts'));
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('admin.blog.edit', compact('post'));
    }


    public function update(Request $request, $id) {

        $post = Post::find($id);

        $title = $request->title;
        $summary = $request->summary;
        $content = $request->content;
        $slug = Str::slug($title);

        $request->validate([
            "title" => "required|string|min:5",
            "summary" => "required|string|min:10",
            "content" => "required|string"

        ]);

        $datas = [
            "title" => $title,
            "summary" => $summary,
            "content" => $content,
            "slug" => $slug
        ];

        $post->update($datas);

        return redirect(route('admin.blog.index'));
    }   
    public function create() {
        return view('admin.blog.create');
    }

    
    public function store(Request $request) {

        $title = $request->title;
        $summary = $request->summary;
        $content = $request->content;
        $slug = Str::slug($title);

        $request->validate([
            "title" => "required|string|min:5",
            "summary" => "required|string|min:10",
            "content" => "required|string"

        ]);

        $datas = [
            "title" => $title,
            "summary" => $summary,
            "content" => $content,
            "slug" => $slug
        ];

        Post::create($datas);

        return redirect(route('admin.blog.index'));
        
    }

 


    public function delete($id) {
        $post = Post::find($id);
        $post->delete();

        return Redirect::back();
    }
}
