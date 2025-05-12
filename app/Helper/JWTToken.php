<?php

namespace App\Helper;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{
    public static function generateToken($userEmail, $userId)
    {
        $key = env('JWT_SECRET_KEY');
        $payload = [
            'iss'           => 'laravel-token', //  who created the token
            'iat'           => time(), // token creation time
            'exp'           => time() + (60 * 60), // token Expiration time (1 hour)
            'user_id'       => $userId, // Subject (user ID)
            'user_email'    => $userEmail, // User email
        ];  

        return $jwt = JWT::encode($payload, $key, 'HS256');
    }
}