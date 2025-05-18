<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use function dd;

class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token  = $request->cookie('token');

        $result = JWTToken::VerifyToken($token);


        if ($result === 'unauthorized'){

            return response()->json([
                'status' => 'failed',
                'message'=> 'unauthorized'
            ]);
        }else{

            $request->headers->set('email', $result->user_email);
            $request->headers->set('id', $result->user_id);

            return $next($request);
        }
    }
}
