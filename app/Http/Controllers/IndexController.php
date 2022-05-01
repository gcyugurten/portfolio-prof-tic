<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
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
}
