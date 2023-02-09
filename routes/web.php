<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/' , [Home::class , 'HomePage']); 
route::get('delete' , [Home::class , 'Delete']); 
route::get('deleteall' , [Home::class , 'DeleteAll']); 
route::get('seed' , [Home::class , 'MakeSeed']); 
route::post('register' , [Register::class , 'NewUser']); 