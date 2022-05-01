<?php


namespace App\Http\Controllers\Elearning;
use Redirect;



use Carbon\Carbon;
use App\Models\Group;
use App\Models\Streaming;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StreamingController extends Controller
{
    public function index($id) {

        $group = Group::find($id);

        $lastStream = Streaming::where('expired', 1)->where('group_id', $group->id)->orderBy("id", "desc")->first();
        
        if($lastStream) {
            if(Carbon::parse($lastStream->created_at)->format("Y-m-d") == date("Y-m-d")) {

                return Redirect::back();
            } else {
                return view('admin.streaming', compact("group"));
            }
        } else {
            return view('admin.streaming', compact("group"));
        }
    }

    public function saveToken($group_id) {
        $token = $_POST['token'];
        $channel = $_POST['channel'];

        $stream = Streaming::create([
            "token" => $token,
            "channel" => $channel,
            'group_id' => $group_id
        ]);

        session()->forget('live_id');
        session(['live_id' => $stream->id]);

    }


    public function stopStreaming($group_id) {

        Streaming::where("group_id", $group_id)->update([
            "expired" => 1
        ]);
        session()->forget('live_id');
    }

    public function deprecateStreaming($stream_id) {
        
        $stream = Streaming::find($stream_id);
        $stream->update([
            "deprecated" => 1,
            "expired" => 1
            
        ]);
        session()->forget('live_id');

        return Redirect::back();
    }
    
}
