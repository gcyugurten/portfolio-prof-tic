<?php

namespace App\Http\Controllers\Elearning;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Group;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{



    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $profile = User::find($userId);
        $groups = Group::all();
        $available_groups = array();
        foreach($groups as $group) {
            if(User::where("group_id", $group->id)->count() < $group->max_members ) {
                array_push($available_groups, $group);
            }
        }
        
        return view('elearning.settings', compact("profile", "available_groups"));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateInfos(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if(Group::find($request->group)) {
            if(User::where('group_id', $request->group)->count() > Group::find($request->group)->max_members) {

                return Redirect::back()->withErrors(['msg' => "Désolé, vous avez choisi un groupe limité, veuillez en choisir un autre"]);
                die();

            } else {
                $request->validate([
                    "fullName" => "required|string|max:255|min:2"
                ]);
        
                $user->update([
                    "fullName" => $request->fullName,
                    "group_id" => $request->group
                ]);
                
                return Redirect::back();
            }
        } else {
            return Redirect::back()->withErrors(['msg' => "Désolé, ce groupe n'existe pas"]);
            die();
        }

        

    }


    public function updatePassword(Request $request) {

        $user = User::find(auth()->user()->id);

        if(Hash::check($request->curr_pass, $user->password)) {
            $request->validate([
                "password" => "confirmed|min:8"
            ]);

            User::find($user->id)->update([
                "password" => Hash::make($request->password)
            ]);
            return Redirect::back()->with('status', 'Mot de passe mis à jour avec succès');
        } else {
            return Redirect::back()->withErrors(["msg" => "Mot de passe actuel est incorrect"]);
        }
        
    }


}
