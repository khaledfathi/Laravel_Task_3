<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class Login extends Controller
{
    public function Login(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $Token = auth()->user()->createToken('token')->accessToken;
            return response()->json(['status' => 200, 'token' => $Token]);
        }
        return response()->json(['status' => '200', 'msg'=>'UserName or Password Error']); 
    }    
}
