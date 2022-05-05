<?php

namespace App\Http\Middleware;

use \Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponse;

use Closure;

class JwtMiddleware
{
    use ApiResponse;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            $user= auth('api')->userOrFail();
        }catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            // return response()->json(['error'=>$e->getMessage()]);
            return $this->apiResponse("errors",$e->getMessage(),401);
        }
        $request['authUserData']=$user;
        return $next($request);
    }
}
