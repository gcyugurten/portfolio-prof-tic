<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Models\Group;
use App\Models\Setting;
use App\Models\Streaming;
use Willywes\AgoraSDK\RtcTokenBuilder;
use phpDocumentor\Reflection\Types\Boolean;

class Helper
{

    




   

    public static function settings() {
        return Setting::find(1);
    }

   

    public static function seens_count() {
        $posts = Post::all();
        $sum = 0;

        foreach($posts as $post) {
            $sum += $post->seens_count;
        }
        return $sum;
    }

}

?>