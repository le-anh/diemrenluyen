<?php

namespace App\Http\Middleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceUserController;

use Closure;
use Auth;

class CoVanHocTap
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $arrayPermission = ServiceUserController::PermissionList();

            if(UserController::isGroupNoneId((env('GROUP_COVANHOCTAP'))) || $arrayPermission['covanhoctap'])
                return $next($request);
        }
        return redirect()->route('index');
    }
}
