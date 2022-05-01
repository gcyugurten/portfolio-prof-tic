<?php

namespace App\Http\Controllers\Elearning;
use App\Http\Controllers\Controller;

use Helper;
use Carbon\Carbon;
use App\Models\Seen;
use App\Models\Group;
use App\Models\Streaming;

class DashboardController extends Controller
{


    
   

    public function index()
    {

        if(auth()->user()->admin) {
            return redirect(route('admin.dashboard'));
        }

        $user_id = auth()->user()->id;
        $group_id = auth()->user()->group_id;
        $group = Group::find($group_id);
        $groupCountMembers = $group->users->count();

        $today_session = false;
        $today_start_time = "";
        $today_end_time = "";
        $nextSession = Helper::nextGroupSession($group_id);

        $stream = Streaming::where("expired", 0)->where('group_id', $group_id)->first();
        $lastStream = Streaming::where('expired', 1)->where('group_id', $group_id)->orderBy("id", "desc")->first();

        if($stream) {
            session(['live_id' => $stream->id]);
        }

        $liveid = session('live_id', "0");


        foreach($group->days as $day) {
            if($day->day == Carbon::now()->englishDayOfWeek) {

                $today_session = true;
                $today_start_time = $day->start_time;
                $today_end_time = $day->end_time;

                break;
            }
        }


        $messages = Seen::where('streaming_id', $liveid)->where('user_id', $user_id)->get();

        return view('elearning.dashboard', compact("groupCountMembers", 'stream', 'today_session', "today_start_time", "today_end_time", 'nextSession', "lastStream", "messages"));
    }


    public function checkStartedVideo() {

        $group_id = auth()->user()->group_id;

        echo Streaming::where("expired", 0)->where('group_id', $group_id)->count();

    }

    public function checkDeprecatedVideo() {

        $group_id = auth()->user()->group_id;

        echo Streaming::where("deprecated", 1)->where('group_id', $group_id)->count();

    }



}
