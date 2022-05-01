<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;

use App\Models\Seen;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function getMessages() {

        $liveid = session('live_id');
        $user_id = auth()->user()->id;

        $messages = Message::where('streaming_id', $liveid)->get();

        

        foreach($messages as $key => $msg) {

            

            if($msg->user_id != $user_id && Seen::where('user_id', $user_id)->where('streaming_id', $liveid)->where('message_id', $msg->id)->count() == 0) {

                $msg->fullName = $msg->user->fullName;

                Seen::create([
                    "user_id" => $user_id,
                    "streaming_id" => $liveid,
                    "message_id" => $msg->id
                ]);

               
            } else {
                $messages->forget($key);
            }
            
                
        }

        return response()->json($messages->toArray());

        

    }


    public function adminGetMessages() {
        $liveid = session('live_id');
        $user_id = auth()->user()->id;
        $messages = Message::where('streaming_id', $liveid)->get();

        

        foreach($messages as $key => $msg) {

            if(Seen::where('user_id', $user_id)->where('streaming_id', $liveid)->where('message_id', $msg->id)->count() == 0) {

                $msg->fullName = $msg->user->fullName;

                Seen::create([
                    "user_id" => $user_id,
                    "streaming_id" => $liveid,
                    "message_id" => $msg->id
                ]);

               
            } else {
                $messages->forget($key);
            }
                
        }

        return response()->json($messages->toArray());
    }


    public function sendMessage() {

        $liveid = session('live_id');
        $user_id = auth()->user()->id;
        $message = $_POST['message'];

        if(!empty($message)) {
            Message::create([
                "message" => $message,
                "user_id" => $user_id,
                "streaming_id" => $liveid
            ]);
        } else {
            return response()->json(["error" => "message is empty"]);
        }
        
    }

}
