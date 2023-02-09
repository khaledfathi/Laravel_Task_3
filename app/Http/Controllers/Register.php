<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 

class Register extends Controller
{
    
    public function NewUser(Request $request)
    {
        $x =$request->validate([
            'name'=>'required|unique:users',
            'password' => 'required|confirmed'
        ]);
        User::create([
            'name'=> $request->name,
            'email'=>$request->email, 
            'password'=> Hash::make($request->password) 
        ]); 
        return back()->with('ok', 'Saved'); 

    }
    //
}
