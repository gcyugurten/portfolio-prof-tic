<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;

class SubscriptionStatus
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
        $activeSubscription = Subscription::where('user_id', auth()->user()->id)->where('expired', 0)->count();
        if($activeSubscription == 0) {
            return $next($request);
        } else {
            return redirect("dashboard");
        }
    }
}
