<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
class EnsureUserRoleIsAllowedToAccess
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
        $role=User::find(Auth::id());
       if($role->role=='1'){
           return redirect('/studentportal');
       }
       elseif($role->role == '2'){
       return redirect('/headteacher');
    }
    elseif($role->role == '3'){
    return redirect('/admin');
    }
    else{
return redirect('/');
    }
}
}
