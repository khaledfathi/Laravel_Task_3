<?php

use App\Http\Controllers\API\Login;
use App\Http\Controllers\API\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::group(['middleware'=>'auth:api'] , function (){
    route::get('users', [Users::class , 'All']); 
    route::get('users/{id}', [Users::class , 'ById']); 
    route::get('users/name/{name}', [Users::class , 'ByName']);
    route::get('users/email/{email}', [Users::class, 'ByEmail']); 
    route::post('users/add', [Users::class, 'NewUser']); 
}); 

route::post('login', [Login::class, 'Login']); 