<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use function dd;
use function response;


class UserController extends Controller
{
    public function registration(Request $request)
    {
       try{

        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'required',
            'password'  => 'required|min:6',
        ]);

        $user               = new User();
        $user->name         = $request->input('name');
        $user->email        = $request->input('email');
        $user->phone        = $request->input('phone');
        $user->password     = $request->input('password');
        $user->save();


        return response()->json([
            'status' => true,
            'message' => 'User registered successfully',
            'data' => $user
        ]);

       }catch(\Exception $e){
           return response()->json([
               'status' => false,
               'message' => $e->getMessage()
           ]);
       }
    }

    public function login(Request $request)
    {

        $user = User::where('email', $request->input('email'))
            ->where('password', $request->input('password'))
            ->select('id')->first();


        if ($user !== null) {
            $token = JWTToken::generateToken($request->input('email'), $user->id);

            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'token' => $token
            ])->cookie('token', $token, 60*24*30); // 30 days

        } else {
            return response()->json([
                'status' => false,
                'message' => 'unauthorized'
            ]);
        }
    }

    public function logout(Request $request)
    {

        return response()->json([
            'status' => 'success',
            'message'=> 'Logout Successfully'
        ])->cookie('token', '', -1);
    }


}
