<?php

namespace App\Http\Controllers\Elearning;

use Helper;

use App\Models\User;
use App\Models\Group;
use App\Models\Setting;
use App\Http\Controllers\Controller;

class GroupsController extends Controller
{

    public function select($id) {
        $group = Group::find($id);

        return view('elearning.join-group', compact("group"));
    }

    public function confirm($id) {

        $user = auth()->user();

        User::find($user->id)->update([
            "group_id" => $id
        ]);


        return redirect(route("dashboard"));

    }


}
