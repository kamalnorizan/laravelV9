<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassportAuthController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response()->json(['user' => auth()->user(), 'access_token' => $accessToken]);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
