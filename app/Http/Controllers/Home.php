<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function HomePage()
    {
        return view('Home' , ['Users' => User::all()]); 

    }
    public function Delete(Request $request)
    {
        User::find($request->id)->delete(); 
        return back();  
    }
    public function DeleteAll()
    {
        User::select('*')->delete(); 
        return back(); 
    }
    public function MakeSeed()
    {
        \Artisan::call('db:seed');
        return back(); 
    }
    //
}
