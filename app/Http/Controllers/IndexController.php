<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index() {

        $posts = Post::all()->take(6);
        return view("index", compact("posts"));
    }

    public function contactForm(Request $request) {

        $request->validate([
            'full_name' => 'string|required',
            'email' => "email|required",
            'message' => "required|min:3|max:1000"
        ]);

        $data = [
            "full_name" => $request->full_name,
            "email" => $request->email,
            "message" => $request->message
        ];

        Mail::to("zahirachouiref@gmail.com")->send(new Contact($data));

        return Redirect::to(URL::previous() . "#contact")->with(['success' => 'Contact Form Submit Successfully']);



    }

    public function blogIndex() {
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
