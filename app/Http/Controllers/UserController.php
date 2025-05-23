<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use function dd;
use function rand;
use function response;


class UserController extends Controller
{
    public function loginPage()
    {
        return Inertia::render('Frontend/Auth/Login');
    }

    public function registrationPage()
    {
        return Inertia::render('Frontend/Auth/Registration');
    }

    public function otpPage()
    {
        return Inertia::render('Frontend/Auth/Send-OTP');
    }
    public function otpVerifyPage()
    {
        return Inertia::render('Frontend/Auth/Verify-OTP');
    }

    public function resetPasswordPage()
    {
        return Inertia::render('Frontend/Auth/Forgot-Password');
    }

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

    public function sendOtp(Request $request)
    {
        $email = $request->input('email');
        $otp   = rand(1000, 9999);
        $user  = User::where('email', $email)->first();

        if ($user){

            //send otp mail
            Mail::to($email)->send(new OTPMail($otp));

            User::where('email', $email)->update(['otp' => $otp]);

            return response()->json([
                'status' => 'success',
                'message'=> "4 digit {$otp} OTP send successfully",
            ]);
        }else{

            return response()->json([
                'status' => 'failed',
                'message'=> 'unauthorized',
            ]);
        }
    }

    public function verifyOtp(Request $request)
    {
        $email  = $request->input('email');
        $otp    = $request->input('otp');

        $user   = User::where('email', $email)->where('otp', $otp)->first();

        if ($user){

            User::where('email', $email)->update(['otp' => 0]);
            $token = JWTToken::generateTokenForSetPassword($request->input('email'));

            return response()->json([
                'status' => 'success',
                'message'=> 'OTP Verified Successfully'
            ])->cookie('token', $token, 60*24*30);;

        }else{
            return response()->json([
               'status' => 'failed',
               'message'=> 'unauthorized'
            ]);
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            $email      = $request->header('email');
            $password   = $request->input('password');

            User::where('email', $email)
                ->update([
                    'password' => $password
                ]);

            return response()->json([
                'status' => 'success',
                'message'=> 'Password Reset Successfully'
            ], 200);
        }
        catch (Exception $e)
        {
            return response()->json([
                'status' => 'failed',
                'message'=> 'Something Went Wrong'
            ], 400);
        }
    }
}
