<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{



    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo =  RouteServiceProvider::HOME;

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

        


    }


    /**
     * [authenticated is used to redirect user after login based on role]
     * @param  Request $request [request object]
     * @param  [type]  $user    [user object to check user role]
     * @return [type]           [return type]
     */
    protected function authenticated(Request $request, $user)
    {
        $redirectTo = (URL::previous() == route('login')) ? route('home') : (URL::previous() == route('admin.login') ? route('admin.dashboard') : '');
        if(boolval($user->admin)) {

            if(!empty($redirectTo)) {
                return redirect( $redirectTo );
            }
        } else {
            return redirect( route('home') ); // it also be according to your need and routes
        }
    }

}
