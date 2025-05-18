<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function response;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = $request->header('email');

        return response()->json([
           'status' => 'success',
           'message'=> 'Dashboard',
            'user' => $user
        ]);
    }
}
