<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');


// Register Routes
Route::get('/register','RegisterController@getRegister1')->name('register.get');
Route::post('/register','RegisterController@postRegister1')->name('register.post');
Route::get('/register2','RegisterController@getRegister2')->name('register2.get');
Route::post('/register2','RegisterController@postRegister2')->name('register2.post');
Route::get('/register3','RegisterController@getRegister3')->name('register3.get');
Route::post('/register3','RegisterController@postRegister3')->name('register3.post');
Route::get('/register4','RegisterController@getRegister4')->name('register4.get');
Route::post('/register4','RegisterController@postRegister4')->name('register4.post');

Route::get('/register5','RegisterController@getRegister5')->name('register5.get');
Route::post('/register5','RegisterController@postRegister5')->name('register5.post');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Route::get('/login','UserController@getLogin')->name('login');
Route::post('/login','UserController@login')->name('login');

// Route::get('/dashboard','UserController@getOverview')->name('overview')->middleware('auth');
Route::get('/overview','OverviewController@getOverview')->name('overview.page');

Route::get('/nutrition','NutritionController@getNutritionPage')->name('nutrition.page');
Route::get('/nutrition/program','NutritionController@getNutritionProgram')->name('nutrition.program');

Route::get('/training','TrainingController@getTrainingPage')->name('training.page');
Route::get('/training/program','TrainingController@getTrainingProgram')->name('training.program');
Route::get('/training/byId','TrainingController@getTrainingById')->name('training.byId');

