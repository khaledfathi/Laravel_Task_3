<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class Users extends Controller
{
    public function All()
    {
        return response()->json(['status'=>200 , User::all()]);
    }
    public function ById(Request $request){
        return response()->json(['status'=>200 ,User::where('id', $request->id)->get() ]);
    }
    public function ByName(Request $request) 
    {
        return response()->json(['status'=>200 ,User::where('name', $request->name)->get()]);
    }
   public function ByEmail(Request $request)
    {
        return response()->json(['status'=>200 ,User::where('email', $request->email)->get()]);
    }
    public function NewUser(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required'
        ]); 

        User::create([
            'name'=> $request->name,
            'password' => Hash::make($request->password), 
            'email' => $request->email
        ]); 
        return response()->json(["status"=>200  ,"msg" => "Record is Saved"]); 
    }
}
