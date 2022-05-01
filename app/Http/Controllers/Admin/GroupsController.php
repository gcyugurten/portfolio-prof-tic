<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Models\User;
use App\Models\Group;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view('admin.groups.index', compact('groups'));
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $alphas = range('A', 'Z');
        $lastGroup = array_search(Group::orderBy('updated_at', 'desc')->first()->name, $alphas);
        $max_members = $request->max_members;
        $newGroupName = $alphas[$lastGroup + 1];

        $request->validate([
            'max_members' => 'required'
        ]);
        Group::create([
            'name' => $newGroupName,
            'max_members' => $max_members
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */

    public function show($id)
    {
        $users = User::where('group_id', $id)->get();
        $group = Group::find($id);
        return view('admin.groups.group', compact('group', 'users'));
    }


    public function deleteUser($userId) {
        $user = User::find($userId);

        $user->update([
            'group_id' => NULL
        ]);

        Subscription::where('user_id', $user->id)->update([
            'expired' => 1
        ]);

        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */

    public function update(Request $request, $id)
    {
        $max_members = $request->max_members;

        Group::find($id)->update([
            'max_members' => $max_members
        ]);

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();

        return redirect(route('admin.groups'));
    }


    public function editWorkingTime(Request $request, $id) {
        $day = Day::find($id);

        // echo $request->startTime;
        $request->validate([
            'day' => "required|in:Dimanche,Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi",
            'startTime' => "required",
            "endTime" => "required"
        ]);

        $day->update([
            'day' => $request->day,
            'start_time' => $request->startTime,
            'end_time' => $request->endTime
        ]);

        return Redirect::back();
    }


    public function deleteWorkingTime(Request $request, $id) {
        $day = Day::find($id);

        $day->delete();

        return Redirect::back();
    }


    public function addWorkingTime(Request $request, $id) {

        if(Group::find($id)) {

            $request->validate([
                'day' => "required|in:Dimanche,Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi",
                'startTime' => "required",
                "endTime" => "required"
            ]);

            Day::create([
                'group_id' => $id,
                'day' => $request->day,
                'start_time' => $request->startTime,
                'end_time' => $request->endTime
            ]);

            return Redirect::back();

        } else {
            return Redirect::back()->withErrors(['msg' => "Vueillez séléctionner un groupe valide!"]);
        }
    }
}

