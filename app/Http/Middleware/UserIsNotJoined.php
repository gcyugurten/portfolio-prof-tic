<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Subscription;
use Illuminate\Http\Request;

class UserIsNotJoined
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $isAllowedToJoin = auth()->user()->group_id === null;

        if($isAllowedToJoin) {

            return $next($request);

        } else {

            return redirect(route('dashboard'));
            
        }
        abort(403);

        
    }
}
