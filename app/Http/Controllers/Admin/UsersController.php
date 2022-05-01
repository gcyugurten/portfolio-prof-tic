<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Group;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isNull;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('admin', 0)->orderByDesc("id")->get();
        
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('admin.users.user-create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fullName = $request->fullName;
        $email = $request->email;
        $password = $request->password;
        $password2 = $request->password_confirmation;
        $group = $request->group == 0 ? NULL : $request->group;


        $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if((!is_null($group) && Group::find($group)->users->count() < Group::find($group)->max_members) || is_null($group)) {
            
            $user = User::create([
                'fullName' => $fullName,
                'email' => $email,
                'password' => Hash::make($password),
                'group_id' => $group,
                "email_verified_at" => now()

            ]);

            
            return redirect( route('admin.users') );
            
        } else {
            return Redirect::back()->withErrors(['msg' => "Vueillez choisir un autre groupe"]);
        }

        

    
            
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $groups = Group::all();
        return view('admin.users.user', compact('user', 'groups'));
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
        $fullName = $request->fullName;
        $email = $request->email;
        $group = $request->group == 0 ? NULL : $request->group;

        $request->validate([
            'email' => 'required|string|email|max:255',
            "fullName" => "required|min:3|max:255",
        ]);

        $user = User::find($id);

        if($group == NULL || count(User::where('group_id', $user->group_id)->get()) < Group::find($group)->max_members ) {

            if($group == NULL) {
                Subscription::where('user_id', $user->id)->update([
                    'expired' => 1
                ]);
            }

            $user->update([
                'fullName' => $fullName,
                'email' => $email,
                "group_id" => $group
            ]);

            return Redirect::back();

        } else {

            return Redirect::back()->withErrors(['msg' => "Please choose another group"]);

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.users'));
    }
}
