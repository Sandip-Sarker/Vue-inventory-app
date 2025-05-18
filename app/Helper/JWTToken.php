<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use function env;

class JWTToken
{
    public static function generateToken($userEmail, $userId)
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss'           => 'laravel-token', //  who created the token
            'iat'           => time(), // token creation time
            'exp'           => time() + (60 * 60), // token Expiration time (1 hour)
            'user_id'       => $userId, // Subject (user ID)
            'user_email'    => $userEmail, // User email
        ];


       return  JWT::encode($payload, $key, 'HS256');
    }

    public static function VerifyToken($token)
    {
        try {

            if($token === null){
                return 'unauthorized';

            }else{
                $key = env('JWT_KEY');
                return JWT::decode($key, new Key($key, 'HS256'));

            }

        }catch (Exception $e){
            return 'unauthorized';
        }
    }
}
