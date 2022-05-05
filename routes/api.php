<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\JwtMiddleware;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Non-Authenticated Routes

Route::post('user/create/','UserController@create');
Route::post('user/login','UserController@login');
Route::get('nutrition/get','NutritionController@getNutrition');


// Authenticated Routes
Route::group(['middleware'=>JWTMiddleware::class],function(){
    
    
});